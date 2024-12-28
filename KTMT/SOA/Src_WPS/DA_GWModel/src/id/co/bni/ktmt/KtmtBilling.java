package id.co.bni.ktmt;

import id.co.bni.ktmt.KtmtBillingPK;

import java.sql.Timestamp;

import javax.persistence.Column;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;

@Entity 
@NamedQueries({
	@NamedQuery(name = "findKtmtBillingByMhpTransId", query = "select o from KtmtBilling o where mhpTransId = :mhpTransId"),
	@NamedQuery(name = "updateKtmtBillingStatus", query = "update KtmtBilling o set  o.responseCode= '00', o.responseDesc='SUKSES'  where pk.performaNo = :performaNo")
	
})
@Table(name = "KTMT_BILLING")

public class KtmtBilling {
	
	@Column(name = "CUSTOMER_NAME")
	private String customerName;
	
	@Column(name = "NPWP")
	private String npwp;
	
	@Column(name = "VESSEL_ID")
	private String vesselId;
	
	@Column(name = "VESSEL_NAME")
	private String vesselName;
	
	@Column(name = "VOYAGE")
	private String voyage;
	
	@Column(name = "SERVICE_CODE")
	private String serviceCode;
	
	@Column(name = "TRANS_DATE")
	private Timestamp transDate;
	
	@Column(name = "AMOUNT")
	private Long amount;
	
	@Column(name = "FEE")
	private Long fee;	
	
	@Column(name = "TOTAL_AMOUNT")
	private Long totalAmount;
	
	@Column(name = "USER_ID")
	private String userId;
	
	@Column(name = "BRANCH_ID")
	private String branchId;	
	
	@Column(name = "CHANNEL")
	private String channel;
	
	@Column(name = "ACCOUNT_NUMBER")
	private String accountNumber;
	
	@Column(name = "PAYMENT_METHOD")
	private String paymentMethod;	
	
	@Column(name = "JOURNAL_NUM")
	private String journalNum;
	
	@Column(name = "NARRATION")
	private String narration;	
	
	@Column(name = "MHP_TRANS_ID")
	private String mhpTransId;
	
	@Column(name = "RESPONSE_CODE")
	private String responseCode;
	
	@Column(name = "RESPONSE_DESC")
	private String responseDesc;
	
	@Column(name = "PERFORMA_DATE")
	private Timestamp performaDate;
	
	@EmbeddedId
	private KtmtBillingPK pk;
	
	public KtmtBilling() {
		// TODO Auto-generated constructor stub
	}
	
	
	public KtmtBilling(KtmtBillingPK pk, String customerName, String npwp,
			String vesselId, String vesselName, String voyage,
			String serviceCode, Timestamp transDate, Long amount, Long fee,
			Long totalAmount, String userId, String branchId, String channel,
			String accountNumber, String paymentMethod, String journalNum,
			String narration, String mhpTransId, String responseCode,
			String responseDesc, Timestamp performaDate) {
		super();
		this.pk = pk;
		this.customerName = customerName;
		this.npwp = npwp;
		this.vesselId = vesselId;
		this.vesselName = vesselName;
		this.voyage = voyage;
		this.serviceCode = serviceCode;
		this.transDate = transDate;
		this.amount = amount;
		this.fee = fee;
		this.totalAmount = totalAmount;
		this.userId = userId;
		this.branchId = branchId;
		this.channel = channel;
		this.accountNumber = accountNumber;
		this.paymentMethod = paymentMethod;
		this.journalNum = journalNum;
		this.narration = narration;
		this.mhpTransId = mhpTransId;
		this.responseCode = responseCode;
		this.responseDesc = responseDesc;
		this.performaDate = performaDate;
	}
	
	/*public void update(String responseCode, String responseDesc){
		this.responseCode = responseCode;
		this.responseDesc = responseDesc;
	}*/
	
	public KtmtBillingPK getPk() {
		return pk;
	}

	public void setPk(KtmtBillingPK pk) {
		this.pk = pk;
	}

	public String getCustomerName() {
		return customerName;
	}

	public void setCustomerName(String customerName) {
		this.customerName = customerName;
	}

	public String getNpwp() {
		return npwp;
	}

	public void setNpwp(String npwp) {
		this.npwp = npwp;
	}

	public String getVesselId() {
		return vesselId;
	}

	public void setVesselId(String vesselId) {
		this.vesselId = vesselId;
	}

	public String getVesselName() {
		return vesselName;
	}

	public void setVesselName(String vesselName) {
		this.vesselName = vesselName;
	}

	public String getVoyage() {
		return voyage;
	}

	public void setVoyage(String voyage) {
		this.voyage = voyage;
	}

	public String getServiceCode() {
		return serviceCode;
	}

	public void setServiceCode(String serviceCode) {
		this.serviceCode = serviceCode;
	}

	public Timestamp getTransDate() {
		return transDate;
	}

	public void setTransDate(Timestamp transDate) {
		this.transDate = transDate;
	}

	public Long getAmount() {
		return amount;
	}

	public void setAmount(Long amount) {
		this.amount = amount;
	}

	public Long getFee() {
		return fee;
	}

	public void setFee(Long fee) {
		this.fee = fee;
	}

	public Long getTotalAmount() {
		return totalAmount;
	}

	public void setTotalAmount(Long totalAmount) {
		this.totalAmount = totalAmount;
	}

	public String getUserId() {
		return userId;
	}

	public void setUserId(String userId) {
		this.userId = userId;
	}

	public String getBranchId() {
		return branchId;
	}

	public void setBranchId(String branchId) {
		this.branchId = branchId;
	}

	public String getChannel() {
		return channel;
	}

	public void setChannel(String channel) {
		this.channel = channel;
	}

	public String getAccountNumber() {
		return accountNumber;
	}

	public void setAccountNumber(String accountNumber) {
		this.accountNumber = accountNumber;
	}

	public String getPaymentMethod() {
		return paymentMethod;
	}

	public void setPaymentMethod(String paymentMethod) {
		this.paymentMethod = paymentMethod;
	}

	public String getJournalNum() {
		return journalNum;
	}

	public void setJournalNum(String journalNum) {
		this.journalNum = journalNum;
	}

	public String getNarration() {
		return narration;
	}

	public void setNarration(String narration) {
		this.narration = narration;
	}

	public String getMhpTransId() {
		return mhpTransId;
	}

	public void setMhpTransId(String mhpTransId) {
		this.mhpTransId = mhpTransId;
	}

	public String getResponseCode() {
		return responseCode;
	}

	public void setResponseCode(String responseCode) {
		this.responseCode = responseCode;
	}

	public String getResponseDesc() {
		return responseDesc;
	}

	public void setResponseDesc(String responseDesc) {
		this.responseDesc = responseDesc;
	}

	public Timestamp getPerformaDate() {
		return performaDate;
	}

	public void setPerformaDate(Timestamp performaDate) {
		this.performaDate = performaDate;
	}
	
	
}
