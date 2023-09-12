<?php
	echo "____ Tipe Data Integer____";
	echo "<br />";
	$x = 1945;
	var_dump($x);
	echo "<br>$x<br>"; // output 1945
	$y = 0127; // oktal --> sama dengan 87
	$z = 0x1B; // hexadesimal --> sama dengan 27
	var_dump($y);
	echo "<br>";
	var_dump($z);
	echo "<br><br>";

	echo "____Tipe Data Float____ ";
	echo "<br>";
	$a = 5.234;
	$b = 3.2e4;
	$c = 4e-10;
	var_dump($a);
	echo "<br>";
	var_dump($b);
	echo "<br>";
	var_dump($c);
	echo "<br><br>";
 
	echo "____Tipe Data Boolean____";
	echo "<br>";
	$menang = true;
	if ($menang == true){
		echo "Selamat Anda Menang !";
	}else {
		"Maaf, Anda Kalah... ";
	}
	echo "<br>";
	$menang = true;
	if ($menang == false){
		echo "Selamat Anda Menang !";
	}else {
		echo "Maaf, Anda Kalah";
	}
	echo "<br><br>";

	echo "____Array____";
	echo "<br>";
	$laptop = array("asus", "lenovo", "HP");
	var_dump($laptop);
	echo "<br><br>";

	echo "____Object____";
	echo "<br>";
	class Hello{

		var $str;

	}

	$message = new Hello();
	$message ->str="Helo World!";
	echo $message ->str;
	echo "<br><br>";

	echo "____NULL____";
	echo "<br>";
	$n = "Tipe Data Null Pada PHP";
	echo "$n<br>";
	$n = null;
	var_dump($n);
	echo $n;
	echo"<br><br>";


	echo "____Array____";
	echo"<br>";
	$laptop= array("asus","lenovo", "HP" );
	var_dump($laptop);
	echo "<br><br>";
?>