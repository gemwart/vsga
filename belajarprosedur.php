<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		function do_print(){
			//mencetak informasi timestamp
			echo time();
		}

		//memanggil prosedur
		do_print();
		echo "<br/>";

		function jumlah($a,$b){
			return ($a+$b);
		}
		echo jumlah(2,3);
	?>

</body>
</html>