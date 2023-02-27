<?php
namespace Dfe\GingerPayments\Test\CreateOrder;
# 2017-03-07
final class BankTransfer extends \Dfe\GingerPaymentsBase\Test\CreateOrder {
	/**
	 * 2017-03-07
	 * @override
	 * @see \Dfe\GingerPaymentsBase\Test\CreateOrder::method()
	 * @used-by \Dfe\GingerPaymentsBase\Test\CreateOrder::t01_success()
	 */
	protected function method():string {return 'sepa-debit-transfer';}
}