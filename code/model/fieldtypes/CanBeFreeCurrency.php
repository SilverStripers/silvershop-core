<?php

/**
 * Allows casting some template values to show "FREE" instead of $0.00.
 */
class CanBeFreeCurrency extends EcommerceCurrency{
	
	function Nice(){
		if($this->value == 0){
			return _t("EcommerceCurrency.FREE","<span class=\"free\">FREE</span>");
		}
		return parent::Nice();
	}
	
}