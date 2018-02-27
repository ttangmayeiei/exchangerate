<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery/jquery-1.8.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/ddd.css">
	<script src="js/msdropdown/jquery.dd.min.js"></script>
	

	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

	
    

	<meta charset="utf-8">
</head>



<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="#">คำนวณอัตราการแลกเปลี่ยน</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"></ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<br>
	<center>
	<form action="calculate-result.php" method="post">
		<div class="container">
		<div class="card">
			
				<br>
				<h2>เครื่องคำนวณอัตราแลกเปลี่ยน</h2>
				<br>
				<label>จำนวนเงินไทย</label>
				<input type="number" name="thb" class="thb" placeholder="กรุณาใส่ค่าเป็นตัวเลข" data-validation="alphanumeric">
				<br>
			<label>สกุลเงินที่ต้องการคำนวน</label>
			
				<select name="type" id="countries">
					<option value="USD" data-image="img/USD.png">USD</option>
					<option value="JYP" data-image="img/JYP.png">JYP</option>
					<option value="KRW" data-image="img/KRW.png">KRW</option>
					<option value="GBP" data-image="img/GBP.png">GBP</option>
					<option value="EUR" data-image="img/EUR.png">EUR</option>
				</select>
			

			
			<br>
			<button type="submit" class="btn btn-success">Calculate</button>
			<br>
			</div>
		</div>
	</form>
	</center>
</body>
</html>
<script>

	$(document).ready(function() {
		$("#countries").msDropdown();
	})

</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<script>
    $.validate();
</script>



