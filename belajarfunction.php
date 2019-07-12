<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		//membuat fungsi/function
		function perkenalan($nama,$salam){
			echo $salam;
			echo "perkenalkan, nama saya".$nama."<br>";
			echo "Senang berkenalan dengan anda <br>";
			}
		//memanggil fungsi
		perkenalan("konang","hi");

		echo "<hr>";

		$saya ="medi";
		$ucapansalam="selamat pagi";
		//memanggil fungsi yang bernilai
		perkenalan($saya,$ucapansalam);

		echo "<br/>";
		echo "----------------------------------------------------------------<br/>";

		//membuat function
		function hitungUmur($thn_lahir,$thn_sekarang){
			$umur = $thn_lahir - $thn_sekarang;
			return $umur;
		}

		function perkenalan2($nama, $salam="selamat datang"){
			echo $salam;
			echo "perkenalkan nama saya".$nama."<br/>";
			//memanggil function
			echo "saya berusia".hitungUmur(1995,2019)."tahun <br/>";
			echo "senang berkenalan dengan anda <br/>";


		}
		perkenalan2("firman");

		echo "<br/>";
		echo "----------------------------------------------------------------<br/>";

		//fungsi faktorial
		function faktorial($angka){
			if ($angka < 2) {
				# code...
				return 1;
			}else{
				//memanggil dirinya sendiri
				return ($angka *faktorial($angka-1));

			}
		}
		//memanggil funsi
		echo "faktorial 5 adalah".faktorial(5);

		echo "<br/>";
		echo "----------------------------------------------------------------<br/>";

		function persegipanjang($p,$l){
			$hasil=$p*$l;
			return $hasil;
		}

		
		$z=10;
		$y=6.5;
		echo "Luas persegi Panjang dengan panjang".$z."dan lebar".$y."adalah : 	".persegipanjang($z,$y);


		function lingkaran($p,$d){
			$r=$d/2;
			$hasil= ($p*$r*$r)/2;
			return $hasil;
		}

		
		$d=10;
		$y=3.14;
		echo "Luas setengah lingkaran yang berdiameter 10 cm adalah : 	".lingkaran($y,$z);

	 ?>
		

</body>
</html>