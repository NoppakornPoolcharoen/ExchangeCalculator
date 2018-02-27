<?php 

	if ($_SERVER['HTTP_HOST']=='localhost') {
		$DB_SEVER = 'localhost';
		$DB_USER = 'root';
		$DB_PASS = 'Silpakorn60';
		$DB_NAME = 'db312_exchange';
	}else{
		//บน server imsu.co
		$DB_SEVER = 'localhost';
		$DB_USER = 'u13580213';
		$DB_PASS = 'snXze0T4Ga';
		$DB_NAME = 'db13580213';
	}

	//คำสั่งต่อกับฐานข้อมูล

	$conn = new mysqli($DB_SEVER,$DB_USER,$DB_PASS,$DB_NAME);

	//เช็คว่าต่อเซิฟเวอร์สำเร็จไหม

	if ($conn -> connect_error) {
		die("connection failed".$conn -> connect_error);
	}

	mysqli_set_charset($conn, "utf8");

 ?>