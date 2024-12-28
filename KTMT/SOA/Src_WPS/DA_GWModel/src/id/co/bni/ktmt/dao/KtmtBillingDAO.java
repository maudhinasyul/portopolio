package id.co.bni.ktmt.dao;

import id.co.bni.ktmt.KtmtBilling;
import id.co.bni.ktmt.KtmtBillingPK;

import java.util.List;
import java.util.logging.Logger;

import javax.persistence.EntityManager;
import javax.persistence.Query;

import commonj.sdo.DataObject;


public class KtmtBillingDAO {
	private static KtmtBillingDAO dao;
	private static final Logger LOG = Logger.getLogger("KtmtBillingDAO");
	
	public static synchronized KtmtBillingDAO getInstance() {
		if (dao == null) {
			dao = new KtmtBillingDAO();
		}
		return dao;
	}
	
	public KtmtBillingDAO() {
		// TODO Auto-generated constructor stub
	}

	@SuppressWarnings("unchecked")
	public List<KtmtBilling> findAllKtmtBilling(EntityManager em) {

		List<KtmtBilling> billings = null;

		try {
			Query query = em.createNamedQuery("findAllKtmtBilling");
			billings = query.getResultList();
		} catch (Exception e) {
			LOG.info("Failed to findAllKtmtBilling: " + e);
		}
		return billings;
	}
	
				
	@SuppressWarnings("unchecked")
	public KtmtBilling findKtmtBillingByMHPId(String mhpTransId, EntityManager em) {

		KtmtBilling billing = null;

		try {
			Query query = em.createNamedQuery("findKtmtBillingByMHPId");
			query.setParameter("mhpTransId", mhpTransId);
			billing = (KtmtBilling) query.getSingleResult();
			LOG.info("KtmtBilling found [" + billing.getMhpTransId() + "]");
		} catch (Exception e) {
			LOG.info("Failed to findKtmtBillingByMHPId by : " + mhpTransId + ", " + e);
		}
		return billing;
	}
	
	@SuppressWarnings("unchecked")
	public KtmtBilling findKtmtBillingByKey(KtmtBillingPK pk, EntityManager em) {
		KtmtBilling billing = null;
		
		try {
			billing = (KtmtBilling) em.find(KtmtBilling.class, pk);
			
		} catch (Exception e) {
			LOG.info("Failed to find KtmtBilling: " + e);
		}

		return billing;
	}
	
	@SuppressWarnings("unchecked")
	public boolean deleteKtmtBilling(String mhpTransId, EntityManager em) {

		KtmtBilling billing = null;
		boolean result = false;

		try {
			
			billing = findKtmtBillingByMHPId(mhpTransId, em);
			
			if (billing != null){
				em.remove(em.contains(billing) ? billing : em.merge(billing));			
				LOG.info("Delete [" + billing.getMhpTransId() + "] from KtmtBilling");				
				result = true;
			} else {
				result = false;
			}

		} catch (Exception e) {
			result = false;
			LOG.info("Failed to delete KtmtBilling: " + e);
		}

		return result;
	}
	
	@SuppressWarnings("unchecked")
	public KtmtBilling updateKtmtBillingStatus(String performaNo, EntityManager em) {

		KtmtBilling result5 = null;
		try {
			Query query = em.createNamedQuery("updateKtmtBillingStatus");
			query.setParameter("performaNo", performaNo);
			query.executeUpdate();	
			LOG.info("Successfully updated!");
			} catch (Exception e) {
			LOG.info("Failed to updateStatus: " + e);
		}
		return result5;
	}
	public void persist(DataObject bo, EntityManager em) {

		try {
			em.persist(bo);

		} catch (Exception e) {
			System.err.println("Failed to persist KtmtBilling: " + bo
					+ ", exception: " + e);
		}
	}
		
	/*public KtmtBilling update(KtmtBilling k, EntityManager em) {

		try {
			em.merge(k);

		} catch (Exception e) {
			System.err.println("Failed to update KtmtBilling: " + k
					+ ", exception: " + e);
		}
		return k;
	}*/
	
}
