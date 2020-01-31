<?php
namespace Dfe\GingerPayments\Test\CreateOrder;
// 2017-03-07
final class BankTransfer extends \Df\GingerPaymentsBase\T\CreateOrder {
	/**
	 * 2017-03-07
	 * @override
	 * @see \Df\GingerPaymentsBase\T\CreateOrder::method()
	 * @used-by \Df\GingerPaymentsBase\T\CreateOrder::t01_success()
	 * @return string
	 */
	protected function method() {return 'sepa-debit-transfer';}
}