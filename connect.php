<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
</head>
<body>

</body>
</html>
<?php
	// if (@_SERVER['HTTP_HOST']=='localhost') {
		$DB_SERVER = 'localhost';
		$DB_USER_READE = 'root';
		$DB_PASS_READE = '';
		$DB_NAME = 'db012_exchange_rate';
		echo "<br>";
		
	
	// } else {
		// บนserver imsu.co
		// $DB_SERVER = 'localhost';
		// $DB_USER_READE = 'u13580210';
		// $DB_PASS_READE = '8zcOZtqqYo';
		// $DB_NAME = 'db13580210';
	// }
	//คำสั่งที่ใช้ต่อกับฐานข้อมูล
	// msqli ปลอดภัยกว่า
	$conn = new mysqli($DB_SERVER,$DB_USER_READE,$DB_PASS_READE,$DB_NAME);

	// ตรวจสอบว่าต่อสำเร็จหรือไม่
	if ($conn -> connect_error) {
		die("connection failed." .$conn -> connect_error);
	}
	//อ่านค่าจากฐานข้อมูลให้เป็นภาษาไทย
	mysqli_set_charset($conn , "utf8");
	
?>