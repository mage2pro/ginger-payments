<?php
namespace Dfe\GingerPayments\Source;
use GingerPayments\Payment\Order\Transaction\PaymentMethod as M;
// 2017-03-01
// [Ginger Payments] Available payment options: https://mage2.pro/t/3463
/** @method static Option s() */
final class Option extends \Df\GingerPaymentsBase\Source\Option {
	/**
	 * 2017-03-01
	 * @override
	 * @see \Df\GingerPaymentsBase\Source\Option::mapExtra()
	 * @used-by \Df\GingerPaymentsBase\Source\Option::map()
	 * @return array(string => string)
	 */
	protected function mapExtra() {return [
		// 2017-03-01
		// What is SOFORT and how does it work? https://mage2.pro/t/3425
		M::SOFORT => 'SOFORT'
	];}
}