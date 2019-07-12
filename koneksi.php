<?php 
$server = "localhost";
$user = "root";
$password = "";
$nama_database="pelatihandts";

$db = mysqli_connect($server, $user, $password, $nama_database);
if(!$db){
	die("gagal terhubung database".mysqli_connect_error());

}else{
	echo "connected";
}


 ?>