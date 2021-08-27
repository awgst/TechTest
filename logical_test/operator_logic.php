<?php
	function pembagian($angka1, $angka2){
		$hasil = 0;
		for ($i=$angka2; $i <=$angka1 ; $i+=$angka2) { 
			$hasil++;
		}
		return $angka1.':'.$angka2.' menghasilkan '.$hasil;
	}

	echo pembagian(14, 7);
?>