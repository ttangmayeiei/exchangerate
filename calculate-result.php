
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	// รับค่ามาแล้วส่งค่าเป็น POST
	// $thb = $_POST['attribute name'];
	$thb = $_POST['thb'];
	$type = $_POST['type'];
	$result;
	$symbol;

	// -------------- แบบที่  --------------
	if ($type == "USD") {
		$result = $thb / 31.2273;
	} elseif ($type == "JYP") {
		$result = $thb / 28.9814;
	} elseif ($type == "KRW") {
		$result = $thb / 0.0290;
	} elseif ($type == "GBP") {
		$result = $thb / 43.3292;
	} elseif ($type == "EUR") {
		$result = $thb / 38.2737;
	} 

	

	if ($type == "USD") {
		$symbol = "$";
	} elseif ($type == "JYP") {
		$symbol = "¥";
	} elseif ($type == "KRW") {
		$symbol = "₩";
	} elseif ($type == "GBP") {
		$symbol = "£";
	} elseif ($type == "EUR") {
		$symbol = "€";
	} 
?>
	<div class="container">
		<center>
			<div class="margintop"></div>
		<div class="card">
			<p>ค่าเงินที่กรอก คือ <?php echo $thb?> บาท</p>
			<p>สกุลเงินที่ใช้คำนวณ คือ <img src="img/<?php echo $type?>.png"> <?php echo $type?> ( <?php echo $symbol?> )</p>
			<p>RESULT =  <?php echo $result?> <?php echo $symbol?></p>
		
		</div>
		</center>
	</div>

<?php
	// -------------- แบบที่ 2 --------------
	// if ($type == "usd") {
	// 	$rate = 0.31;
	// } elseif ($type == "jyp") {
	// 	$rate = 0.21;
	// } elseif ($type == "krw") {
	// 	$rate = 0.11;
	// } elseif ($type == "gbp") {
	// 	$rate = 0.50
	// } elseif ($type == "eur") {
	// 	$rate = 0.40;
	// } 
	// echo "Result = " .thb*rate;

	// //-------------- แบบที่ 3 --------------
	// switch ($type) {
	// 	case 'usd':
	// 		$rate = 0.31;
	// 		break;
	// 	case 'jyp':
	// 		$rate = 0.21;
	// 		break;
	// 	case 'krw':
	// 		$rate = 0.11;
	// 		break;
	// 	case 'gbp':
	// 		$rate = 0.50;
	// 		break;
	// 	case 'eur':
	// 		$rate = 0.40;
	// 		break;
		
	// 	default:
	// 		$rate = 0;
	// 		break;
	// }
	// echo "Result = " .$result;

	require 'connect.php';

	$sql = "INSERT INTO exch012_history(thb,calculated,currency) VALUES($thb,$result,'$type')";
	$sql_exe = $conn -> query($sql);
	// echo "sql : " .$sql;
	// print($sql_exe);
?>


	<?php



		$sql = "SELECT * FROM exch012_history ORDER BY dateRecord DESC";
		$sql_exe = $conn -> query($sql);
		
	?>
	<div class="container">
		<table class="table table-striped">
			<thead class="thead-dark">
				<th scope="col">THB</th>
				<th scope="col">EXCHANGE TO</th>
				<th scope="col">RESULT</th>
				<th scope="col">TIME</th>
				<th scope="col">DELETE</th>
			</thead>
		<?php 
			while($row = mysqli_fetch_assoc($sql_exe)) {
		?>
			<!-- echo $row['thb']."<tr>exchange to </tr>" .$row['currency']." = " .$row['calculated']. " " .$row['dateRecord']. " ";
			// $array['key/field name']	 -->
			<tr>
				<td><?php echo $row['thb'];?></td>
				<td><img src="img/<?php echo $row['currency']?>.png"> <?php echo $row['currency'];?></td>
				<td><?php echo $row['calculated'];?></td>
				<td><?php echo $row['dateRecord'];?></td>
				<td><a href="delete.php?id=<?php echo $row['recordID'];?>&thb=<?php echo $row['thb'];?>"><button class="btn btn-danger">DELETE</button></a></td>
			</tr>

		
	
		<?php
		
			
			}
			$conn ->close();

		?>
		</table>
	
	<br>
	<center>
	 <a href="index.php">
	 	<button type="button" class="btn btn-info">
	 		BACK TO HOME
	 	</button>
	 </a>
	 </center>
	 </div>

</body>
</html>











