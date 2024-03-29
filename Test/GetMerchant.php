<?php
namespace Dfe\GingerPayments\Test;
/**
 * 2017-03-01
 * https://www.gingerpayments.com/docs#_merchants
 * [Ginger Payments] Why does a «GET merchants/self/projects/self/» request
 * lead to the «You don't have the permission to access the requested resource» response?
 * https://mage2.pro/t/3457
 * [Ginger Payments] Why does a «GET /merchants/{merchant_id}/projects/{project_id}/» request
 * lead to the «You don't have the permission to access the requested resource» response?
 * https://mage2.pro/t/3460
 */
final class GetMerchant extends \Dfe\GingerPaymentsBase\Test\GetMerchant {
	/**
	 * 2017-03-01
	 * @override
	 * @see \Dfe\GingerPaymentsBase\Test\GetMerchant::merchantId()
	 * @used-by \Dfe\GingerPaymentsBase\Test\GetMerchant::t01()
	 */
	protected function merchantId():string {return 'e563c46f';}

	/**
	 * 2017-03-01
	 * @see \Dfe\GingerPaymentsBase\Test\GetMerchant::projectId()
	 * @used-by \Dfe\GingerPaymentsBase\Test\GetMerchant::t01()
	 */
	protected function projectId():string {return '6dc226ae-3924-4c61-bb02-49ad000fa961';}
}