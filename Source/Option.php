<?php
namespace Dfe\GingerPayments\Source;
# 2017-03-01
# [Ginger Payments] Available payment options: https://mage2.pro/t/3463
/** @method static Option s() */
final class Option extends \Dfe\GingerPaymentsBase\Source\Option {
	/**
	 * 2017-03-01
	 * What is SOFORT and how does it work? https://mage2.pro/t/3425
	 * @override
	 * @see \Dfe\GingerPaymentsBase\Source\Option::mapExtra()
	 * @used-by \Dfe\GingerPaymentsBase\Source\Option::map()
	 * @return array(string => string)
	 */
	protected function mapExtra():array {return ['sofort' => 'SOFORT'];}
}