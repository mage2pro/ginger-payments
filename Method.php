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
	 * @see \Df\GingerPaymentsBase\Method::vatFactor()
	 * @used-by \Df\GingerPaymentsBase\T\CreateOrder::t01_success()
	 * @return int
	 */
	function vatFactor() {return 1;}
}