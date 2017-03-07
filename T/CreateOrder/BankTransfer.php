<?php
namespace Dfe\GingerPayments\T\CreateOrder;
use GingerPayments\Payment\Order\Transaction\PaymentMethod as M;
// 2017-03-07
final class BankTransfer extends \Df\GingerPaymentsBase\T\CreateOrder {
	/**
	 * 2017-03-07
	 * @override
	 * @see \Df\GingerPaymentsBase\T\CreateOrder::method()
	 * @used-by \Df\GingerPaymentsBase\T\CreateOrder::t01_success()
	 * @return string
	 */
	protected function method() {return M::BANK_TRANSFER_G;}
}