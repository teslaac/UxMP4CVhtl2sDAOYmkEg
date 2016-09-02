<?php
function to_currency($number, $decimals = 2)
{
	$CI =& get_instance();
	$currency_symbol = $CI->config->item('currency_symbol') ? $CI->config->item('currency_symbol') : '$';
	if($number >= 0)
	{
		$ret = $currency_symbol.number_format($number, $decimals, '.', ',');
    }
    else
    {
    	$ret = $currency_symbol.number_format(abs($number), $decimals, '.', ',');
    }

	return preg_replace('/(?<=\d{2})0+$/', '', $ret);
}

function round_to_nearest_05($amount)
{
	return round($amount * 2, 1) / 2;
}

function to_currency_no_money($number, $decimals = 2)
{
	$ret = number_format($number, $decimals, '.', '');
	return preg_replace('/(?<=\d{2})0+$/', '', $ret);
}

?>