<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="imageprocess";
 $conn = mysqli_connect($servername, $username, $password, $db);
 ?>
<html>
<head>
	<link rel="stylesheet" href="animate.css">
	<title>RamCollection</title>
	<style>
		.heade{
			width:88%;
			height:20%;
			background-color: #ad0826;
			  background:url('mb1.jpg');
			   box-shadow: 5px 5px;
			   border-radius: 15px 15px 0px 0px;
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
		.backgro{
			background-color: #ffffff;
			width: 1200px;
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
		margin-top: -120px;
		margin-left: -290px;
		
		}
		.model{
			margin-left: -990px;
			margin-top: -10px;
			text-align: center;
			font-family:Tahoma;





color:#ffffff;
		}
		.model1{
			margin-left: -1000px;
			margin-top: -10px;
			font-family:Verdana;
			font-size: 10px;
		}
		.brand{
			margin-top: -42px;
			margin-left: -650px;
				font-family:Tahoma;




				color:#ffffff;
		}
		.brand1{
			margin-top: -20px;
			margin-left: -650px;
			font-family:Verdana;
			font-size: 10px;
		}
		.ramsize{
			margin-top: -42px;
			margin-left: -300px;
				font-family:Tahoma;



				color:#ffffff;
		}
		.ramsize1{
			margin-top: -25px;
			margin-left: -300px;
			font-family:Verdana;
			font-size: 10px;
		}
		.ramtype{
				margin-top: -43px;
			margin-left: 40px;
				font-family:Tahoma;


				color:#ffffff;
		}
		.ramtype1{
				margin-top: -29px;
			margin-left: 40px;
			font-family:Verdana;
			font-size: 10px;
		}

		.voltage{
			margin-top: -40px;
			margin-left: 350px;
				font-family:Tahoma;

				color:#ffffff;
		}
		.voltage1{
			margin-top: -28px;
			margin-left: 350px;
			font-family:Verdana;
			font-size: 10px;
		}
		.price{
			margin-top: -42px;
			margin-left: 680px;
				font-family:Tahoma;
				color:#ffffff;
		}
		.price1{
			margin-top: -26px;
			margin-left: 680px;
font-family:Verdana;
			font-size: 10px;
		}
		.select{
			margin-top: -40px;
			margin-left: 890px;
			font-family:Tahoma;
			color:#ffffff;
		}
		input[type=checkbox]
		{
			margin-top: -25px;
			margin-left: 890px;
		}
		
		
		.bac{
			margin-top: -60px;
			height: 50px;
			width: 1200px;

			background-color:  #201e1e;
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
			margin-right: 1200px;
			margin-top: -30px;
		}
		.backgrounn{
	      filter: blur(1000px);
		}
		
	</style>
</head>
<div class="backgrounn">
<body background="mb.jpg">
</div>
	<center>
		<div class="heade"></div>
		<div class="roun"></div>
		<div class="roun1"></div>
		<div class="h">
		<h6>Ram Selection</h6></div>
		<div class="ram">
			<img src="ram1.png" width="100px" height="100px">
		</div>
		<div class="animated fadeInDown">
		<div class="model">
		<h3>Model_No</h3></div>
		<div class="brand">
		<h3>Brand_Name</h3></div>
		<div class="ramsize">
		<h3>Ram_Size</h3></div>
		<div class="ramtype">
		<h3>Ram_Type</h3></div>
		<div class="voltage">
		<h3>Voltage_Support</h3></div>
		<div class="price">
		<h3>Price</h3></div>
		<div class="select">
		<h3>Select</h3></div>
		<div class="bac">
		</div>
</div>
	
<?php
echo"<div class='backgro'>";
	$var = 0;
	$sql="SELECT * FROM ram";
	$r=mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($r))
	{
		
		echo "<div class='animated slideInLeft delay-1s model1'>";
		echo "<h3>".$row['modelno']."</h3>";
		echo "</div>";
		echo "<div class='animated slideInLeft delay-1s brand1'>";
		echo "<h3>".$row['brandname']."</h3>";
		echo "</div>";
		echo "<div class='animated slideInLeft delay-1s ramsize1'>";
		echo "<h3>".$row['ramsize']."</h3>";
		echo "</div>";
		echo "<div class='animated slideInRight delay-1s ramtype1'>";
		echo "<h3>".$row['ramtype']."</h3>";
		echo "</div>";
		echo "<div class='animated slideInRight delay-1s voltage1'>";
		echo "<h3>".$row['voltage']."</h3>";
		echo "</div>";
		echo "<div class='animated slideInRight delay-1s price1'>";
		echo "<h3>".$row['price']."</h3>";
		echo "</div>";
		echo "<form method='POST' action='rampreview.php'>";
		echo "<div class='animated fadeInRight delay-1s'>";
		echo "<input type='checkbox' id ='$var' name='item_select[]' value='".$row['modelno']."' >";
		echo "</div>";
		echo"<div class='imagg'>";
		echo"<img src='ram12.png' width='30px' height='30px'>";
		echo"</div>";
		echo "<hr>";
		$var = $var + 1;
	}
	echo "</div>";
	echo "<input type='submit' name='submit' value='submit'>";
	echo "</form>";
?>
	
	
</center>
</body>
</html>

