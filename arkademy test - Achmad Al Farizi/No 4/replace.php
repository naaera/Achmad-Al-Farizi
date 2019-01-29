<?php
$rep = new replace();
$rep->replacetext("L", "O", "KELAPA");

class replace{
	function replacetext($before, $after, $string){
	
			mb_internal_encoding("UTF-8");
			mb_regex_encoding("UTF-8");

			$my_text = mb_ereg_replace($before, $after, $string);

			echo $my_text;
	}
}
?>