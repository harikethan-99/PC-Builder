<html>
<head>
	<title>Processor</title>
	<style>
		.heade{
			width:100%;
			height:20%;
			background-color: #ad0826;
			border-radius: 15px 15px 0px 0px;
			  background:url('mb1.jpg');
			   box-shadow: 5px 5px;
		}
		.roun{
			width:40px;
			height:40px;
			background-color: #ffffff;
			border-radius: 40px;
			margin-left: -950px;
			margin-top: -50px;
			 box-shadow: 5px 5px;
			
		}
		.roun1{
			width:40px;
			height:40px;
			background-color: #ffffff;
			border-radius: 40px;
			margin-left: 950px;
			margin-top: -40px;
			 box-shadow: 5px 5px;
			
		}
		.h{
			font-size: 37px;
			color: #ffffff;
			font-style:bold;
			font-family:Verdana;
			margin-top:-100px;
			
		}
		.ram{
		margin-top: -100px;
		margin-left: -360px;
		
		
		}
		.model{
			margin-left: -1180px;
			margin-top: 10px;
			color: #ffffff;
			font-family:Tahoma;
		}
		.model1{
			margin-left: -1180px;
			margin-top: -10px;
			font-size: 15px;

			font-family:Verdana;

		}
		.brand{
			margin-top: -42px;
			margin-left: -870px;
				font-family:Tahoma;
				color: #ffffff;
		}
		.brand1{
			margin-top: -40px;
			margin-left: -870px;
			font-size: 15px;
			font-family:Verdana;
		}
		.ramsize{
			margin-top: -42px;
			margin-left: -550px;
				font-family:Tahoma;
				color: #ffffff;
		}
		.ramsize1{
			margin-top: -40px;
			margin-left: -550px;
			font-size: 15px;
			font-family:Verdana;
		}
		.ramtype{
				margin-top: -43px;
			margin-left: -240px;
			color: #ffffff;
				font-family:Tahoma;
		}
		.ramtype1{
				margin-top: -40px;
			margin-left: -240px;
			font-size: 15px;
			font-family:Verdana;
		}

		.voltage{
			margin-top: -40px;
			color: #ffffff;
			margin-left: -40px;
				font-family:Tahoma;
		}
		.voltage1{
			margin-top: -40px;
			font-size: 15px;
			margin-left: -40px;
			font-family:Verdana;
		}
		.price{
			margin-top: -42px;
			color: #ffffff;
			margin-left: 150px;
				font-family:Tahoma;
		}
		.price1{
			margin-top: -40px;
			margin-left: 150px;
			font-size: 15px;

		}
		.price11{
			margin-top: -42px;
			color: #ffffff;
			margin-left: 320px;
				font-family:Tahoma;
		}
		.price111{
			margin-top: -40px;
			font-size: 15px;
			margin-left: 320px;

		}
		.price12{
			margin-top: -42px;
			color: #ffffff;
			margin-left: 550px;
				font-family:Tahoma;
		}
		.price112{
			margin-top: -40px;
			margin-left: 550px;
			font-size: 15px;

		}
		.price13{
			margin-top: -42px;
			margin-left: 860px;
			color: #ffffff;
				font-family:Tahoma;
		}
		.price113{
			margin-top: -40px;
			font-size: 15px;
			margin-left: 860px;

		}
		.backgro{
			background-color: #ffffff;
			width: 1370px;
		}
		.price14{
			margin-top: -42px;
			margin-left: 1120px;
			color: #ffffff;
				font-family:Tahoma;
		}
		.price114{
			margin-top: -40px;
			font-size: 15px;
			margin-left: 1120px;

		}
		.select{
			margin-top: -40px;
			margin-left: 1250px;
			font-family:Tahoma;
			color: #ffffff;
		}
		input[type=checkbox]
		{
			margin-top: -40px;
			margin-left: 1250px;
		}
		.bac{
			margin-top: -60px;
			height: 50px;
			width: 1480px;
			border-radius: 10px;

		background-color:  #201e1e
		}
	input[type=submit]
		{
			margin-left: 890px;
			color: #ffffff;
			font-size: 15px;
			font-style: bold;
			width: 80px;
			height: 50px;
			background-color: #ad0826;
			box-shadow: 4px 4px #000000;
			border:none;
			border-radius: 10px;
		}
		.imagg{
			margin-right: 1400px;
			margin-top: -40px;
		}
	</style>
</head>
<body background="mb.jpg">
	<center>
		<div class="heade"></div>
		<div class="roun"></div>
		<div class="roun1"></div>
		<div class="h">
		<h6>Processor Selection</h6></div>
		<div class="ram">
			<img src="process.png" width="70px" height="70px">
		</div>

		<div class="model">
		<h3>Model_No</h3></div>
		<div class="brand">
		<h3>Socket_type</h3></div>
		<div class="ramsize">
		<h3>TDP</h3></div>
		<div class="ramtype">
		<h3>Name</h3></div>
		<div class="voltage">
		<h3>Gen</h3></div>
		<div class="price">
		<h3>Cores</h3></div>
		<div class="price11">
		<h3>Thread</h3></div>
		<div class="price12">
		<h3>Clock_Speed</h3></div>
		<div class="price13">
		<h3>Ovclock_Speed</h3></div>
		<div class="price14">
		<h3>Price</h3></div>
		<div class="select">
		<h3>Select</h3></div>
		<div class="bac">
</div>
	
<?php
echo"<div class='backgro'>";
$servername = "localhost";
$username = "root";
$password = "";
$db="imageprocess";
 $conn = mysqli_connect($servername, $username, $password, $db);
$sql="SELECT * FROM processor";
$r=mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($r))
{
	
	echo "<div class='model1'>";
	echo "<h3>".$row['model_no']."</h3>";
	echo "</div>";
	echo "<div class='brand1'>";
	echo "<h3>".$row['socket_type']."</h3>";
	echo "</div>";
	echo "<div class='ramsize1'>";
	echo "<h3>".$row['tdp']."</h3>";
	echo "</div>";
	echo "<div class='ramtype1'>";
	echo "<h3>".$row['name']."</h3>";
	echo "</div>";
	echo "<div class='voltage1'>";
	echo "<h3>".$row['gen']."</h3>";
	echo "</div>";
	echo "<div class='price1'>";
	echo "<h3>".$row['cores']."</h3>";
	echo "</div>";
	echo "<div class='price111'>";
	echo "<h3>".$row['thread']."</h3>";
	echo "</div>";
	echo "<div class='price112'>";
	echo "<h3>".$row['clock_speed']."</h3>";
	echo "</div>";
	echo "<div class='price113'>";
	echo "<h3>".$row['ovclock_speed']."</h3>";
	echo "</div>";
	echo "<div class='price114'>";
	echo "<h3>".$row['price']."</h3>";
	echo "</div>";
	echo "<form method='POST' action='processpreview.php'>";
	echo "<input type='checkbox'  name='item_select[]' value='".$row['model_no']."' >";
	echo"<div class='imagg'>";
		echo"<img src='process12.png' width='30px' height='30px'>";
		echo"</div>";
		echo "<hr>";
}
echo"</div>";
echo "<input type='submit' name='submit' value='submit'>";
	echo "</form>";
 ?>		
	
</center>
</body>
</html>