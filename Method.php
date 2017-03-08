<?php
// 2017-02-25
namespace Dfe\GingerPayments;
final class Method extends \Df\GingerPaymentsBase\Method {
	/**
	 * 2017-02-28
	 * Kassa Compleet and Ginger Payments use different formats
	 * for the «order_lines/order_line/vat_percentage» property
	 * of a «POST /v1/orders/» request: https://mage2.pro/t/3451
	 * «"minimum": 0, "maximum": 100».
	 * @override
	 * @see \Df\GingerPaymentsBase\Method::vatIsInteger()
	 * @used-by \Df\GingerPaymentsBase\Charge::pOrderLines_products()
	 * @used-by \Df\GingerPaymentsBase\T\CreateOrder::t01_success()
	 * @return bool
	 */
	function vatIsInteger() {return false;}

	/**
	 * 2017-03-07
	 * https://mage2.pro/t/3355/2
	 * @override
	 * @see \Df\GingerPaymentsBase\Method::bankTransferId()
	 * @used-by \Df\GingerPaymentsBase\Method::optionT()
	 * @return bool
	 */
	protected function bankTransferId() {return 'sepa-debit-transfer';}
}