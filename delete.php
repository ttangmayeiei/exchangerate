
<!DOCTYPE html>
<html>
<head>
	<title>Detail Delete</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<center>
	<?php
	
		$id = $_REQUEST['id'];
		$thb = $_REQUEST['thb'];
	
	

		$sql = "DELETE FROM exch012_history WHERE recordID = $id";
		require 'connect.php';

		$sql_exe = $conn -> query($sql);

		if ($sql_exe) {
		?>
			<img src="img/checked.png">
			<div style="margin-top: 5px; font-size: 22px; color: #32bea6;">Delete complete !</div>

			<div>Delete ID : <?php echo $id?></div>
			<div>THB : <?php echo $thb?></div>
			<!-- echo "Delete complete "; 
			echo "Delete ID : ". $id;
			echo "THB : " .$thb; -->
		<?php	
			// header("location:index.php");
		} else {
			echo "Delete fialed ";
			echo "sql ".$sql;
		}
		echo "<br>";

	?>


	 <a href="index.php">
	 	<button type="button" class="btn btn-info">
	 		BACK TO HOME
	 	</button>
	 </a>


	 </center>
	</div><!-- container -->
</body>
</html>



