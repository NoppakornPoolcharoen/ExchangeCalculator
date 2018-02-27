<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exchange Calculator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  	<link rel="stylesheet" href="dist/css/bootstrap-select.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  	<script src="dist/js/bootstrap-select.js"></script>
  	<link rel="stylesheet" type="text/css" href="dist/css/dropdown.css">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div id="app">
		<div class="text-center container-fluid">
			<h1>เครื่องมือคำนวณอัตราแลกเปลี่ยน</h1>
		</div><br><br>
		<div class="container">
			<form class="cov-frm" name="frm" action="calculateResult.php" method="post" onsubmit="return myFunction()" >
				<label>จำนวนเงินไทย</label><br>
				<input id="innumb" class="form-control" type="number" name="thb" required><br>
				<p class="text-danger" id="demo"></p>
				<label>สกุลเงินที่ต้องการคำนวณ</label><br>
				<select class="selectpicker form-control" name="changeto">
					<option value="usd" data-icon="usd">USD</option>
					<option value="jyp" data-icon="jyp">JYP</option>
					<option value="krw" data-icon="krw">KRW</option>
					<option value="gbp" data-icon="gbp">GBP</option>
					<option value="eur" data-icon="eur">EUR</option>
				</select>
				<br><br><br>
				<button class="btn btn-primary btn-lg btn-block" type="submit">Calculate</button>
			</form>
			
		</div>
	</div>
</body>
</html>

<script>
	function myFunction() {
	    var x, text;

	    // Get the value of the input field with id="numb"
	    x = document.forms["frm"]["thb"].value;

	    // If x is Not a Number or less than one or greater than 10
	    if (x <= 0) {
	        text = "กรุณาใส่ตัวเลขที่ไม่ติดลบ";     
	        document.getElementById("demo").innerHTML = text;
	        return false;
	    }    
	}
</script>



























