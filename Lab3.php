<!DOCTYPE html>
<html>
<head>
	<title>Electricity Bill</title>
</head>
<body >
	<h1 >Electricity Bill Calculation</h1>

	<form method="POST" >
		
		<label for="units">Enter Units Consumed:</label>
		<input  type="text" name="units" id="units" required >
		<br>
		<br>
		<button type="submit" >Calculate</button>
	</form>
	<br>

<table>
  <thead>
    <tr>
      <th>Units</th>
      <th>Rate</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1-50</td>
      <td>Rs. 3.50/unit</td>
    </tr>
    <tr>
      <td>51-150</td>
      <td>Rs. 4.00/unit</td>
    </tr>
    <tr>
      <td>151-250</td>
      <td>Rs. 5.20/unit</td>
    </tr>
    <tr>
      <td>Above 250</td>
      <td>Rs. 6.50/unit</td>
    </tr>
  </tbody>
</table>



	<?php
	// Check if form is submitted
	if(isset($_POST['units'])) {
		// Get the number of units consumed
		$units = $_POST['units'];
		
		// Electricity bill calculation based on units consumed
		if($units <= 50) {
			$bill = $units * 3.50;
		} elseif($units <= 150) {
			$bill = (50 * 3.50) + (($units - 50) * 4.00);
		} elseif($units <= 250) {
			$bill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
		} else {
			$bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
		}
		
		// Display the electricity bill
		echo "<h2>Electricity Bill: Rs. " . number_format($bill, 2) . "</h2>";
	}
	if(isset($_POST['units'])) {
		// Get the number of units consumed
		$units = $_POST['units'];
		
		// Electricity bill calculation based on units consumed
		if($units <= 50) {
			echo "<h4>Units are between 0 to 50 so rate is Rs. 3.50/unit</h4>";
		} elseif($units <= 150) {
			echo "<h4>Units are between 51 to 150 so rate is Rs. 4.00/unit</h4>";
		} elseif($units <= 250) {
			echo "<h4>Units are between 151 to 250 so rate is Rs. 5.20/unit</h4>";
		} else {
			echo "<h4>Units are above 250 so rate is Rs. 6.50/unit</h4>";
		}

	}
	?>
</body>

<style>

button{
	font-weight : 600;
}
h1 {
  margin-top: 20px;
  text-align: center;
}

form {
color : white;
  margin-top: 20px;
  background-color: #090a13;
  padding: 10px;
  width: 50%;
  margin: 0 auto;
  text-align: center;
}

table { 
	color : white;
  margin-top: 20px;
  border-collapse: collapse;
  width: 50%;
  margin: 0 auto;
}

th,
td {
  text-align: center;
  padding: 10px;
  background-color: #090a13;
}

th {
	color : white;
  background-color: #6b1086;
}


h2 {
  text-align: center;
  margin-top: 20px;
}

h4 {
  text-align: center;
  margin-top: 20px;
}


</style>
</html>