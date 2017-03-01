<?php
namespace Dfe\GingerPayments\Source;
// 2017-03-01
/** @method static Option s() */
final class Option extends \Df\GingerPaymentsBase\Source\Option {
	/**
	 * 2017-03-01
	 * @override
	 * @see \Df\GingerPaymentsBase\Source\Option::mapExtra()
	 * @used-by \Df\GingerPaymentsBase\Source\Option::map()
	 * @return array(string => string)
	 */
	protected function mapExtra() {return [];}
}