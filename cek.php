<?php 
	$nama =$_POST['nama'];
	$alamat=$_POST['alamat'];
	$tempat=$_POST['tempat'];
	$jeniskelamin=$_POST['jeniskelamin'];
	$usia=$_POST['usia'];

	if($nama && $alamat && $tempat && $jeniskelamin && $usia == ""){
		header("location:hari6.php.nama=kososng,alamat=kosong,tempat=kosong,jeniskelamin=kosong,usia=kosong");
	}else{
		echo "Nama saya : ".$nama;
		echo "<br>";
		echo "Alamat saya di :".$alamat;
		echo "<br>";
		echo "Tempat saya : ".$tempat;
		echo "<br>";
		echo "jeniskelamin : ".$jeniskelamin;
		echo "<br>";
		echo "usia : ".$usia;
		echo "<br>";
	}


?>