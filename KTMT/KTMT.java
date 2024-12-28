package id.co.bni.service.mhp.custom;


import id.co.bni.ktmt.KtmtBilling;
import id.co.bni.ktmt.KtmtBillingPK;
import id.co.bni.ktmt.dao.KtmtBillingDAO;
import id.co.bni.service.mhp.Common;
import id.co.bni.service.mhp.MhpException;
import id.co.bni.service.mhp.ServiceWrapper;
import id.co.bni.service.mhp.bo.ReversalData;
import id.co.bni.soa.MhpBilling;
import id.co.bni.soa.dao.MhpBillingDAO;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;

import org.apache.commons.lang.StringUtils;
import org.jdom.Element;

import com.ibm.websphere.sca.ServiceBusinessException;

import commonj.sdo.DataObject;

public class KTMT {
	public static EntityManagerFactory mhp_db = Persistence.createEntityManagerFactory("SOADB");

	public static final String ns_bncs_ktmt = "http://service.bni.co.id/bancslink/ktmt";
	public static final String ns_ktmt = "http://service.bni.co.id/mhp/ktmt";
	public static final String ns_blink = "http://service.bni.co.id/bancslink";
	
	public static void reflagging(HashMap savedBO) throws Exception {

		Common.log.info("KTMT.reflagging ");
		
		DataObject request = (DataObject) savedBO.get("Request");
		String paymentCode = request.getString("Body/billingId1");
		String currency = request.getString("Body/currency");

		Common.log.info("KTMT.reflagging " + paymentCode + " " + currency);

		// Lookup KTMT_BILLING and MHP_BILLING
		EntityManager em = mhp_db.createEntityManager();
		em.joinTransaction();

		KtmtBilling ktmt = getKtmtBilling(paymentCode, currency, em);
		String mhpBillingId = ktmt.getMhpTransId();
		MhpBilling mhp = getMhpBilling(mhpBillingId);
		
		// get raw data from db
		DataObject rawData = Common.serializeBO(mhp.getRawData());
		List<DataObject> boList = rawData.getList("boList");
		
		// get request response
		for (DataObject bo : boList) {
			if ("McpRequest".equals(bo.getString("name"))) {
				savedBO.put("McpRequest", bo.getDataObject("bo"));
			} else if ("McpResponse".equals(bo.getString("name"))) {
				savedBO.put("McpResponse", bo.getDataObject("bo"));
			} else if ("Request".equals(bo.getString("name"))) {
				savedBO.put("Request095491", bo.getDataObject("bo"));
			}else if ("HostRequest".equals(bo.getString("name"))) {
				savedBO.put("HostRequest", bo.getDataObject("bo"));
			}
		}
		
		savedBO.put("MhpBilling", mhp);

		// Check if response_code already exists
		String journalNum = ktmt.getJournalNum();
		String rc = ktmt.getResponseCode();
		String performaNo = ktmt.getPk().getPerformaNo();
		String customerName = ktmt.getCustomerName();
		String npwp = ktmt.getNpwp();
		String vesselId = ktmt.getVesselId();
		String vesselName = ktmt.getVesselName();
		String voyage = ktmt.getVoyage();
		String serviceCode = ktmt.getServiceCode();
		String performaDate = ktmt.getPerformaDate().toString();
		
		String responseCode = ktmt.getResponseCode();
//		String responseMessage = ktmt.getResponseDesc();
		String status = "Sukses";
		if (!"00".equals(rc) && !(journalNum.isEmpty() || "".equals(journalNum))) {
			DataObject payRes = Common.boFactory.create(
					"http://service.bni.co.id/mhp/ktmt", "PaymentRes");
			payRes.setString("performaNo", performaNo);
			payRes.setString("performaDate", performaDate);
			payRes.setString("customerName", customerName);
			payRes.setString("npwp", npwp);
			payRes.setString("vesselId", vesselId);
			payRes.setString("vesselName", vesselName);
			payRes.setString("voyage", voyage);
			payRes.setString("serviceCode", serviceCode);
			payRes.setString("responseCode", responseCode);
			//payRes.setString("responseMessage", responseMessage);
			payRes.setString("status", status);

			
			savedBO.put("PaymentRes", payRes);
			savedBO.remove("MhpBilling");
			
			savedBO.put("h_fee", ktmt.getFee());
		}
		else
		{
			DataObject payRes = Common.boFactory.create(ns_ktmt, "PaymentRes");
			payRes.setString("responseCode", rc);
			//payRes.setString("responseMessage", responseMessage);
			payRes.setString("status", status);
			
			savedBO.put("PaymentRes", payRes);
			savedBO.remove("MhpBilling");
			throw new MhpException("MPNG2_REINQ", "42",
			"BILLING ID SUDAH SUKSES DILAKUKAN PEMBAYARAN SEBELUMNYA");
		}
	}
	
	public static DataObject reflaggingResponse(HashMap savedBO)
	throws Exception {
		
		DataObject response = Common.boFactory.create(Common.ns_blink,"Response");
		
		//DataObject reqMhp = (DataObject) savedBO.get("Request");
		DataObject request = (DataObject) savedBO.get("Request");
		DataObject reqKtmt = (DataObject) savedBO.get("Request095491");
		DataObject mcpReq = (DataObject) savedBO.get("McpRequest");
		DataObject mcpRes = (DataObject) savedBO.get("McpResponse");
		DataObject hReq = (DataObject) savedBO.get("HostRequest");
		DataObject payRes = (DataObject) savedBO.get("PaymentRes");
		
		
		List<DataObject> responseList = new ArrayList();
		DataObject bo = Common.boFactory.create(Common.ns_blink,"ResponseMessage");

		if(!"00".equals(payRes.getString("responseCode")))
		{
			bo = createRX095491(bo, request, reqKtmt, mcpReq);
			bo.set("Body/h_performaNo", payRes.get("performaNo"));
			bo.set("Body/h_serviceCode", payRes.get("serviceCode"));
			bo.set("Body/h_vesselName", payRes.get("vesselName"));
			bo.set("Body/h_vesselId", payRes.get("vesselId"));
			bo.set("Body/h_voyage", payRes.get("voyage"));
			bo.set("Body/h_performaDate", payRes.get("performaDate"));	
			bo.set("Body/h_customerName", payRes.get("customerName"));
			bo.set("Body/h_npwp", payRes.get("npwp"));
			bo.set("Body/h_currency", payRes.get("currency"));
			bo.set("Body/h_amount", payRes.get("amount"));
			bo.set("Body/h_isError", payRes.get("isError"));
			bo.set("Body/h_responseCode", payRes.get("responseCode"));
			bo.set("Body/h_responseDesc", payRes.getString("responseDesc"));
		}
		else
		{
			bo.setDataObject("Header", request.getDataObject("Header"));
			DataObject rx = Common.boFactory.create(ns_ktmt, "RX095491");
		}
		responseList.add(bo);
		response.set("responseMessage", responseList);
		return response;
					
	}
	
	private static DataObject createRX095491(DataObject bo, DataObject reqMhp,
			DataObject reqKtmt, DataObject mcp) {
		DataObject rx = Common.boFactory.create(ns_bncs_ktmt, "RX095491");

		bo.setDataObject("Header", reqMhp.getDataObject("Header"));
		bo.setDataObject("Body", rx);

		bo.setString("Header/tranCode", "095491");
		bo.setString("Header/messageHandlerFlag", "6");
		bo.set("Body/PAYMENT_TYPE", reqMhp.get("Body/PAYMENT_TYPE"));
		bo.set("Body/CHANNEL", reqMhp.get("Body/CHANNEL"));
		bo.set("Body/MCP_ID", reqMhp.get("Body/MCP_ID"));
		bo.set("Body/h_performaNo", reqKtmt.get("Body/h_performaNo"));
		bo.set("Body/h_serviceCode", reqKtmt.get("Body/h_serviceCode"));
		bo.set("Body/h_vesselId", reqKtmt.get("Body/h_vesselId"));
		bo.set("Body/h_vesselName", reqKtmt.get("Body/h_vesselName"));
		bo.set("Body/h_voyage", reqKtmt.get("Body/h_voyage"));
		bo.set("Body/h_performaDate", reqKtmt.get("Body/h_performaDate"));
		bo.set("Body/h_customerName", reqKtmt.get("Body/h_customerName"));
		bo.set("Body/h_npwp", reqKtmt.get("Body/h_npwp"));
		bo.set("Body/h_currency", reqKtmt.get("Body/h_currency"));
		bo.set("Body/h_amount",reqKtmt.get("Body/h_amount"));
		bo.set("Body/h_fee", reqKtmt.get("Body/h_fee"));
		bo.set("Body/h_totalAmount", reqKtmt.get("Body/h_totalAmount"));
		bo.set("Body/h_billCode", reqKtmt.get("Body/h_billCode"));
		bo.set("Body/h_billName", reqKtmt.get("Body/h_billName"));
		bo.set("Body/h_billShortName", reqKtmt.get("Body/h_billShortName"));
		bo.set("Body/h_billAmount", reqKtmt.get("Body/h_billAmount"));
		
		bo.set("Body/c_payMethod", reqKtmt.get("Body/c_payMethod"));
		bo.set("Body/c_dbAccountNum", reqKtmt.get("Body/c_dbAccountNum"));
		bo.set("Body/c_description", reqKtmt.get("Body/c_description"));

		return bo;
		
	}
	
	private static KtmtBilling getKtmtBilling(String paymentCode,
			String currency, EntityManager em) throws MhpException {

		KtmtBillingPK pk = new KtmtBillingPK(paymentCode, currency);
		KtmtBilling ktmt = KtmtBillingDAO.getInstance().findKtmtBillingByKey(pk, em);

		if (ktmt == null) {
			Common.log.error("KTMT.reinquiry CANNOT find KTMT_BILLING " + pk);
			throw new MhpException("KTMT_REINQ", "41",
					"BILLING ID BELUM PERNAH DILAKUKAN PEMBAYARAN SEBELUMNYA");
		} else {
			return ktmt;
		}
	}
	
	private static MhpBilling getMhpBilling(String id) throws MhpException {

		EntityManager em = Common.getEm("SOADB", false);
		MhpBilling mhp = MhpBillingDAO.getInstance()
				.findMhpBillingByKey(id, em);

		if (mhp == null) {
			Common.log.error("KTMT.reinquiry CANNOT find MHP_BILLING " + id);
			throw new MhpException("KTMT_REINQ", "42",
					"MASTER BILLING TIDAK DITEMUKAN. HUBUNGI CALL CENTER");

		} else {
			return mhp;
		}
	}
		
	public static String paymentStatus(String from, HashMap savedBO) {
		String result = "TRANSAKSI DALAM PROSES";
		
		DataObject hostResponse = (DataObject) savedBO.get("HostResponse");
		
		if (hostResponse != null) {
			String rc = hostResponse.getString("content/responseCode");
			
			result = ("00".equals(rc)) ? "SUKSES" : result;
		}
		
		return result;
	}
	
	public static void removePaymentLog(String mhpTransId) {
		boolean status = false;
		
		try {
			EntityManager em = mhp_db.createEntityManager();
			status = KtmtBillingDAO.getInstance().deleteKtmtBilling(mhpTransId, em);
			Common.log.info("[" + Common.uuid + "] Delete " + mhpTransId + " from KtmtBilling: " + status);
		} catch (ServiceBusinessException e) {
			Common.log.error("[" + Common.uuid + "] Failed to delete " + mhpTransId + " from KtmtBilling");
			e.printStackTrace();
		}
	}
	
	public static String responseCode(String from, HashMap savedBO) {
		String result = "00";

		DataObject hostResponse = (DataObject) savedBO.get("HostResponse");
		if (hostResponse != null) {
			String rc = hostResponse.getString("content/responseCode");
			result = ("00".equals(rc)) ? result : rc;
		}
		return result;
	}
}
