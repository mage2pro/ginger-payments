<?php
// 2017-02-25
namespace Dfe\GingerPayments;
use GingerPayments\Payment\Order\Transaction\PaymentMethod as M;
/** @method static Settings s() */
final class Settings extends \Df\GingerPaymentsBase\Settings {
	/**
	 * 2017-02-26
	 * @override
	 * @see \GingerPayments\Payment\IProduct::bankTransferCode()
	 * @used-by \GingerPayments\Payment\Client::createSepaOrder()
	 * @return string
	 */
	function bankTransferCode() {return M::BANK_TRANSFER_G;}

	/**
	 * 2017-02-26
	 * @override
	 * @see \Df\GingerPaymentsBase\Settings::apiDomain()
	 * @used-by \Df\GingerPaymentsBase\Settings::api()
	 * @return string
	 */
	protected function apiDomain() {return 'gingerpayments.com';}
}