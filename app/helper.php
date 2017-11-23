<?php

if(!function_exists('format_price')){
	function format_price($event)
	{
		if($event->isFree())
		{
			return '<strong>GRATUIT!!</strong>';
		}
		else
		{
			return sprintf("%.2f euros", $event->price);
		}

	}
}

if(!function_exists('format_date')){
	function format_date($date)
	{
		return $date->format('d/m/Y H:i');
	}
}