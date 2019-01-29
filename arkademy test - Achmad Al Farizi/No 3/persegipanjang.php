<?php

class persegipanjang {
	public function pp($panjang){
		$tengah = (($panjang-1)/2)+1;
		for ($i = 1; $i <= $panjang; $i++){
			for ($j = 1; $j <= $panjang; $j++){
				if ($j == 1 || $j == $panjang || $i == 1 || $i == $panjang || $j == $tengah || $i == $tengah){
					echo "*&nbsp&nbsp";
				} else {
					echo "&nbsp&nbsp&nbsp&nbsp";
				}
			}
			echo "</br>";
		}
	}
}

$persegip = new persegipanjang();
$persegip->pp(11);
?>