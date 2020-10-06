<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="imageprocess";
 $conn = mysqli_connect($servername, $username, $password, $db);
 ?>
<!DOCTYPE html>
<html>
<style>
.wrapram
{
	position: absolute;
transition: 0.5s;
}
.ram
{
	width: 175px;
	height: 175px;
	position: relative;
	background-color: #ad0826;
	border-radius: 10%;
	margin-top: 120px;
	margin-left: 600px;
	background-image:url("ram1.png");
	background-repeat: no-repeat;
	background-position: 40px 2px;
	background-size: 100px 100px;
	transition: all 2s;
}

.ram2 {
	margin-top: 120px !important;
	margin-left: 400px !important;
}
.ram3 {
	margin-top: 320px !important;
	margin-left: 600px !important;
}
.ram:hover{
	transition: 0.5s;
	 box-shadow:10px 10px 8px #888888;

}
.raming{
	position: absolute;
	margin-top: 95px;
	margin-left:20px;
	
}
.raming select{
	width: 130px;
	height:25px;
}
.wrapgcard
{
	position: absolute;
transition: 0.5s;
}
.gcard
{
	width: 175px;
	height: 175px;
	background-color: #ad0826;
	position: relative;;
	border-radius: 10%;
	margin-top: 120px;
	margin-left: 600px;
	background-image:url("gpu.png");
	background-repeat: no-repeat;
	background-position: 40px 2px;
	background-size: 100px 100px;
	transition: 1s all;
}

.gcard2 {
	margin-top: 120px !important;
	margin-left: 600px !important;
}
.gcard3 {
	margin-top: 320px !important;
	margin-left: 600px !important;
}
.gcard:hover{
	transition: 0.5s;
	 box-shadow:10px 10px 8px #888888;

}
.gcarding{
	position: absolute;
	margin-top: 95px;
	margin-left:20px;
	
}
.gcarding select{
	width: 130px;
	height:25px;
}
.wrapps
{
	position: absolute;
transition: 0.5s;
}
.ps
{
	width: 175px;
	height: 175px;
	background-color: #ad0826;
	position: relative;;
	border-radius: 10%;
	margin-top: 120px;
	margin-left: 600px;
	background-image:url("ps.png");
	background-repeat: no-repeat;
	background-position: 40px 2px;
	background-size: 100px 100px;
	transition: 1s all;
}

.ps2 {
	margin-top: 120px !important;
	margin-left: 800px !important;
}
.ps3 {
	margin-top: 320px !important;
	margin-left: 600px !important;
}
.ps:hover{
	transition: 0.5s;
	 box-shadow:10px 10px 8px #888888;

}
.pscarding{
	position: absolute;
	margin-top: 95px;
	margin-left:20px;
	
}
.pscarding select{
	width: 130px;
	height:25px;
}
.wrapssd
{
	position: absolute;
transition: 0.5s;
}
.ssd
{
	width: 175px;
	height: 175px;
	background-color: #ad0826;
	position: relative;;
	border-radius: 10%;
	margin-top: 120px;
	margin-left: 600px;
	background-image:url("ssd2.png");
	background-repeat: no-repeat;
	background-position: 40px 8px;
	background-size: 80px 80px;
	transition: 1s all;
}

.ssd2 {
	margin-top: 320px !important;
	margin-left: 400px !important;
}
.ssd3 {
	margin-top: 320px !important;
	margin-left: 600px !important;
}
.ssd:hover{
	transition: 0.5s;
	 box-shadow:10px 10px 8px #888888;

}
.ssdcarding{
	position: absolute;
	margin-top: 95px;
	margin-left:20px;
	
}
.ssdcarding select{
	width: 130px;
	height:25px;
}
.wraphd
{
	position: absolute;
transition: 0.5s;
}
.hd
{
	width: 175px;
	height: 175px;
	background-color: #ad0826;
	position: relative;;
	border-radius: 10%;
	margin-top: 120px;
	margin-left: 600px;
	background-image:url("hd.png");
	background-repeat: no-repeat;
	background-position: 40px 2px;
	background-size: 100px 100px;
	transition: 1s all;
}

.hd2 {
	margin-top: 320px !important;
	margin-left: 800px !important;
}
.hd3 {
	margin-top: 320px !important;
	margin-left: 600px !important;
}
.hd:hover{
	transition: 0.5s;
	 box-shadow:10px 10px 8px #888888;

}
.hdcarding{
	position: absolute;
	margin-top: 95px;
	margin-left:20px;
	
}
.hdcarding select{
	width: 130px;
	height:25px;
}
.wrapipro
{
	position: absolute;
transition: 0.5s;
}
.ipro
{
	width: 175px;
	height: 175px;
	background-color: #ad0826;
	position: relative;;
	border-radius: 10%;
	margin-top: 120px;
	margin-left: 600px;
	background-image:url("process.png");
	background-repeat: no-repeat;
	background-position: 40px 9px;
	background-size: 100px 80px;
	transition: 1s all;
}

.ipro2 {
	margin-top: 390px !important;
	margin-left: 600px !important;
}

.ipro:hover{
	transition: 0.5s;
	 box-shadow:10px 10px 8px #888888;

}
.iprocarding{
	position: absolute;
	margin-top: 95px;
	margin-left:20px;
	
}
.iprocarding select{
	width: 130px;
	height:25px;
}
.t{
	position: absolute;
	width:1200px;
	height: 90px;
	margin-top: -50px;
	letter-spacing: 3px;
	text-align: center;
	margin-left: 100px;
	font-size: 40px;
	color:#ad0826;
	font-family: Arial, Helvetica, sans-serif;
}
.rambest{
	position: absolute;
	width:300px;
    height:50px;  
    color:#ad0826;
    background-color: white;
	margin-top: 120px; 
	border: none;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	background-image:url("ram12.png");
	background-repeat: no-repeat;
	background-position: 20px -15px;
	background-size: 80px 80px;
}
    .rambest:hover{
        transition: 0.5s;
	 box-shadow:10px 10px 8px #888888;
        background-color: red;
        color: white;
    }
.gcardbest{
	position: absolute;
	width:300px;
    height:50px;  
    color: #ad0826;
	margin-top: 170px; 
	border: none;
	background-color: white;
	text-align:center;
    font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	background-image:url("gpu12.png");
	background-repeat: no-repeat;
	background-position: 30px 7px;
	background-size: 60px 40px;
}
.ssdbest{
	position: absolute;
	width:300px;
    height:50px;  
    color:#ad0826;
	margin-top: 220px; 
	border: none;
	background-color: white;
	text-align:center;
    font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	background-image:url("ssd12.png");
	background-repeat: no-repeat;
	background-position: 30px 7px;
	background-size: 60px 40px;
}
.hdbest{
	position: absolute;
	width:300px;
    height:50px;  
    color:#ad0826;
	margin-top: 270px; 
	border: none;
	background-color: white;
	text-align:center;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	background-image:url("hd12.png");
	background-repeat: no-repeat;
	background-position: 30px 7px;
	background-size: 60px 40px;
}
.icbest{
	position: absolute;
	width:300px;
    height:50px;  
    color:#ad0826;
	margin-top: 320px; 
	border: none;
	background-color: white;
	text-align:center;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	background-image:url("process12.png");
	background-repeat: no-repeat;
	background-position: 30px 7px;
	background-size: 60px 40px;
}
.next{
	position: absolute;
	width:100px;
    height:50px;  
    color:#ffffff;
    border:none;
    border-radius: 10%;
	background-color: #ad0826;
	margin-top: 600px;
	margin-left: 620px;
    border-style: none; 
    color:#ffffff;
    border-radius: 10%;
    background-position: center;
}
.next:hover{
	transition: 0.5s;
	 box-shadow:10px 10px 8px #888888;
}
.Done{
	position: absolute;
	width:100px;
    height:50px;  
    color:#ffffff;
    border:none;
    border-radius: 10%;
	background-color: #ad0826;
	margin-top: 280px;
	margin-left:40px;
    border-style: none; 
    color:#ffffff;
    border-radius: 10%;
    background-position: center;
}

.foo{
	margin-top: 290px;
	margin-left: 990px;
	width:300px;
	height:800px;
}
input[type=text]
		{
			width:180px;
			height: 20px;
			margin-top: 20px;
			border-color: #ad0826;
			border-radius:5px;
		}
</style>
<body>
	


	<div class="t">
	 <H>Choose your Components</H></div>
	<div class="wrapipro" id="ipro1">
		<div class ="ipro">
		<div class ="iprocarding">			
		<input type="submit" name="submit" id="process" value="Select">
	</div>
</div>
</div>
<script>
	var btn6 = document.getElementById("process");
btn6.onclick = function() {
  window.open("Process.php");
}
</script>
		<div class="wraphd" id="hd1">
		<div class ="hd">
		<div class ="hdcarding">			
		<input type="submit" name="submit" id="hdd" value="Select">
	</div>
</div>
</div>
<script>
	var btn5 = document.getElementById("hdd");
btn5.onclick = function() {
  window.open("hdd.php");
}
</script>
	<div class="wrapssd" id="ssd1">
		<div class ="ssd">
		<div class ="ssdcarding">			
		<input type="submit" name="submit" id="ssd" value="Select">
	</div>
</div>
</div>
<script>
	var btn4 = document.getElementById("ssd");
btn4.onclick = function() {
  window.open("sdd.php");
}
</script>
	<div class="wrapps" id="ps1">
		<div class ="ps">
		<div class ="pscarding">			
		<input type="submit" name="submit" id="sm" value="Select">
	</div>
</div>
</div>
<script>
	var btn3 = document.getElementById("sm");
btn3.onclick = function() {
  window.open("psu.php");
}
</script>
	<div class="wrapgcard" id="gcard1">
	<div class="gcard">
		<div class ="gcarding">			
	<input type="submit" name="submit" id="gpu" value="Select">
</div>
	</div>
</div>
<script>
	var btn4 = document.getElementById("gpu");
btn4.onclick = function() {
  window.open("gpu.php");
}
</script>
	<div class="wrapram" id="ram1">
		<div class ="ram">
		<div class ="raming">			
		<input type="submit" name="submit" id="ramm" value="Select">
	</div>
</div>
</div>
<script>
	var btn2 = document.getElementById("ramm");
btn2.onclick = function() {
  window.open("Ram.php");
}
function openRam()
    {
        window.open("bestram.html");
    }
</script>

<form>
	<input type="button" class ="next" name="n" value ="NEXT" onclick="next()">
</form>
<input type="submit" class="rambest" name="" value ="Best Components" id="rambest" onclick="openRam()">
<!--
	<input type="button" class="gcardbest" name="submit1" value ="Best GraphicsCard">

	<input type="button" class="ssdbest" name="submit2" value ="Best SSD">
	<input type="button" class="hdbest" name="submit3" value ="Best HardDisk">
	<input type="button" class="icbest" name="submit4" value ="Best CPU">
	
-->

</div>



<?php
		if(@$_GET['ramname']==true)
		{
			$ramnam=$_GET['ramname'];
		    $ramtyp=$_GET['ramtype'];
		     $sql ="UPDATE customertable SET ramname='$ramnam', ramtype='$ramtyp'"; 

		     if (mysqli_query($conn, $sql)) {
             echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
		}
	if(@$_GET['smname']==true)
		{
			$smnam=$_GET['smname'];
		    $smtyp=$_GET['smtype'];
		    $sql = "UPDATE customertable SET suname='$smnam', supplyvolt='$smtyp'"; 
		     if (mysqli_query($conn, $sql)) {
             echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
		}
		if(@$_GET['gname']==true)
		{
			$gnam=$_GET['gname'];
		    $gtyp=$_GET['gtype'];
		    $sql = "UPDATE customertable SET gpuname='$gnam',volt='$gtyp'"; 
		     if (mysqli_query($conn, $sql)) {
             echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
		}
		if(@$_GET['sname']==true)
		{
			$snam=$_GET['sname'];
		    $ssize=$_GET['ssize'];
		     $snvme=$_GET['snvme'];
		    $sql = "UPDATE customertable SET sdname='$snam',disksize='$ssize',nvme='$snvme'"; 
		     if (mysqli_query($conn, $sql)) {
             echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
		}
	if(@$_GET['hname']==true)
		{
			$hnam=$_GET['hname'];
		    $hsize=$_GET['hsize'];
		  
		    $sql = "UPDATE customertable SET hddname='$hnam',disksizehd='$hsize'"; 
		     if (mysqli_query($conn, $sql)) {
             echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
		}

if(@$_GET['pname']==true)
		{
			$pnam=$_GET['pname'];
		    $ptype=$_GET['ptype'];
		    $pgen=$_GET['pgen'];
		    $sql = "UPDATE customertable SET proname='$pnam',sockettype='$ptype',gen='$pgen'"; 
		     if (mysqli_query($conn, $sql)) {
             echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
		}


 //, suname, supplyvolt, sdname, disksize, nvme, hddname, disksizehd, proname, sockettype, gen, gpuname,volt
 //,'smnam','smtyp'


 
				    	
                      
				    	
				  
				 
		

?>
<div class='foo'>
<form  method='post' action="SC.php">
<input type="submit" class="Done" name="submit" value ="Done"> 
</form>
</div>
</body>
</html>
<script>
	var components = ["ram", "gcard","ps","ssd","hd","ipro"];
	var baccomp = ["ram", "gcard","ps","ssd","hd"];
	function next()
	{
		
		let className = components.shift();
		//console.log(className);
		//console.log(components);
		document.querySelector('.' + className).classList.add(className + '2');

	}
	var btn2 = document.getElementById("myBtn1");
btn2.onclick = function() {
  window.open("camera.php");
}

</script>