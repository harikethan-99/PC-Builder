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
	    <link rel="stylesheet" href="motherboard1.css">

	<title>SelectedComponents</title>
	<style>
		.round{
			width: 30px;
			height: 30px;
			margin-top:-46px;
			margin-left: -290px;
			border-radius: 30px;
			background-color:#ffffff;

		}
		.round1{
			width: 30px;
			height: 30px;
			margin-top:-30px;
			margin-left: 290px;
			border-radius: 30px;
			background-color:#ffffff;

		}
		.shape1{
			width: 400px;
			height: 60px;
			margin-top:95px;
			
			background-color:#201e1e;
			 box-shadow:6px 6px 6px #000000;
		}
		.shape{
			width: 400px;
			height: 800px;
			margin-top: -10px;
			background-color: #201e1e;
		background:url('mb1.jpg');
		background-position: center;
		}
		.shape:hover{
			transition: 1s;
			 box-shadow:40px 40px 190px 190px #000000;
		}
		.starting{
			font-style: bold;
	        font-size: 11px;
	        color:#ffffff;
	        margin-top: -730px;
	        font-family: Arial, Helvetica, sans-serif;
		}
		.heads{
			font-style: bold;
	        font-size: 18px;
	        color:#ffffff;
	        font-family: Arial, Helvetica, sans-serif;
		}
		.selectedpartsshape{
			width: 400px;
			height: 40px;
			
			background-color: #ffffff;
		}
		.selectedparts{
			font-style: bold;
	        font-size: 16px;
	        color:#ad0826;
	        font-family: Arial, Helvetica, sans-serif;
		}
	.sub{
	position: absolute;
	width:100px;
    height:50px;  
    color:#ffffff;
    
	background-color: #f54242; 
    margin-top: 40px;
    margin-left: 80px;
    color:#ffffff;
  background:url('mb1.jpg');
  border-color: #ffffff;
  border-width: 2px;
    background-position: center;
}
.rambutton{
	position: absolute;
	width:60px;
    height:40px;  
    color:#ffffff;
    border:none;
	background-color: #f54242;
    border-style: none; 
    margin-top: -41px;
    margin-left: 140px;
    color:#ffffff;
    
    background-position: center;
}
.gpubutton{
	position: absolute;
	width:60px;
    height:40px;  
    color:#ffffff;
    border:none;
	background-color: #f54242;
    border-style: none; 
    margin-top: -41px;
    margin-left: 140px;
    color:#ffffff;
    
    background-position: center;
}
.smpsbutton{
	position: absolute;
	width:60px;
    height:40px;  
    color:#ffffff;
    border:none;
	background-color: #f54242;
    border-style: none; 
    margin-top: -41px;
    margin-left: 140px;
    color:#ffffff;
    
    background-position: center;
}
.ssdbutton{
	position: absolute;
	width:60px;
    height:40px;  
    color:#ffffff;
    border:none;
	background-color: #f54242;
    border-style: none; 
    margin-top: -41px;
    margin-left: 140px;
    color:#ffffff;
    
    background-position: center;
}
.hddbutton{
	position: absolute;
	width:60px;
    height:40px;  
    color:#ffffff;
    border:none;
	background-color: #f54242;
    border-style: none; 
    margin-top: -40px;
    margin-left: 140px;
    color:#ffffff;
    
    background-position: center;
}
.processorbutton{
	position: absolute;
	width:60px;
    height:40px;  
    color:#ffffff;
    border:none;
	background-color: #f54242;
    border-style: none; 
    margin-top: -40px;
    margin-left: 140px;
    color:#ffffff;
    
    background-position: center;
}
	</style>
</head>

<body background="mb.jpg">
<CENTER>
	<div id="myModal" class="modal">

	 <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
  </div>
     
   <div class="modal-body">

   	  	<div class="headd">

	<h1>Selected Parts</h1></div>

	<div class="back"></div>
<div class="subject1img">
<img src="ram12.png" width:"40px" height="40px">
</div>
	<div class="subject1">
	<h3>Ram:</h3></div>
<?php
	if(isset($_REQUEST['submit']))
	{
	 $sql="SELECT * FROM customertable";
	 $result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {
					$ram=$row["ramname"];
					$ramtype=$row["ramtype"];
					echo"<div class='rampart'>";
		echo"<a href='Ram.php'><h3>".$ram."\t".$ramtype."</h3></a>";
		echo"</div>";
	}
}
}
?>
	<div class="subject2img">
<img src="ps12.png" width:"40px" height="40px">
</div>
	<div class="subject2">
	<h3>SMPS:</h3></div>
	<?php
	if(isset($_REQUEST['submit']))
	{
	 $sql="SELECT * FROM customertable";
	 $result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {
				    	$suname=$row["suname"];
					$supplyvolt=$row["supplyvolt"];
		echo"<div class='smpspart'>";
		echo"<a href='psu.php'><h3>".$suname."\t".$supplyvolt."</h3></a>";
		echo"</div>";
			}
}
}
?>
	<div class="subject3img">
<img src="gpu12.png" width:"40px" height="40px">
</div>
	<div class="subject3">
	<h3>GPU:</h3></div>
	<?php
	if(isset($_REQUEST['submit']))
	{
	 $sql="SELECT * FROM customertable";
	 $result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {$gpuname=$row["gpuname"];
					$volt=$row["volt"];
		echo"<div class='gpupart'>";
		echo"<a href='Ram.php'><h3>hi".$gpuname."\t".$volt."</h3></a>";
		echo"</div>";
		}
}
}
?>
	<div class="subject4img">
<img src="hd12.png" width:"40px" height="40px">
</div>
	<div class="subject4">
	<h3>HardDisk:</h3></div>
	<?php
	if(isset($_REQUEST['submit']))
	{
	 $sql="SELECT * FROM customertable";
	 $result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {
				    	$hddname=$row["hddname"];
					$disksizehd=$row["disksizehd"];

		echo"<div class='hddpart'>";
		echo"<a href='hdd.php'><h3>".$hddname."\t".$disksizehd."</h3></a>";
		echo"</div>";
				}
}
}
?>
	<div class="subject5img">
<img src="ssd12.png" width:"40px" height="40px">
</div>
	<div class="subject5">
	<h3>SDD:</h3></div>
	<?php
	if(isset($_REQUEST['submit']))
	{
	 $sql="SELECT * FROM customertable";
	 $result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {
				    	$sdname=$row["sdname"];
					$disksize=$row["disksize"];
					$nvme=$row["nvme"];
		
		echo"<div class='sddpart'>";
		echo"<a href='Ram.php'><h3>".$sdname."\t".$disksize."\t".$nvme."</h3></a>";
		echo"</div>";
					}
}
}
?>
	<div class="subject6img">
<img src="process12.png" width:"40px" height="40px">
</div>
	<div class="subject6">
	<h3>Processor:</h3></div>
	<?php
	if(isset($_REQUEST['submit']))
	{
	 $sql="SELECT * FROM customertable";
	 $result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {
				    	$proname=$row["proname"];
					$sockettype=$row["sockettype"];
					$gen=$row["gen"];
					
		echo"<div class='processorpart'>";
		echo"<a href='Process.php'><h3>".$proname."\t".$sockettype."\t".$gen."</h3></a>";
		echo"</div>";
			}
}
}
?>
	<div class="subject7img">
<img src="mb5.png" width="40px" height="40px">
</div>
	<div class="MotherBoard">
<h3>MotherBoard</h3></div>
<?php
$sql="SELECT * FROM motherboard where ramtype = '$ramtype' AND  nvmecheck = '$nvme' AND socket='$sockettype'";
echo "<div class='display'>";
echo "<form target='_self' method=post>";
echo"<select name='mb'>";
	$r=mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($r))
	{	
		echo "<option value='".$row['modelno']."'>".$row['modelno']."</option>";
}

echo"</select>";

echo "<input type ='submit' class='sub1' name='submit' value='CHECK YOUR RESULT'>";

echo "</div>";
if(isset($_POST['mb']))
{
$m=$_POST["mb"];
	

	$sql1="SELECT * FROM motherboard where modelno = '$m'";
		$r1=mysqli_query($conn, $sql1);
	while($row = mysqli_fetch_array($r1))
	{	

		echo"<div class='animated rotateInDownLeft m'>";
		
		echo"<div class='animated fadeInDown'>";
		
	echo"<div class='animated fideInRight resulttext'>";
			
		echo "<h2>MODEL NO:\t".$row['modelno']."</h2>";	echo "</div>";
		echo"<div class='animated fideInRight resulttext2'>";
		echo "<h2>BRANDNAME:\t".$row['brandname']."</h2>";	echo "</div>";
			echo"<div class='resulttext'>";
			
		echo"<div class='animated rotateInDownLeft modelno'>";
		echo "<h6>SOCKET:\t".$row['socket']."</h6>";echo "</div>";
		echo"<div class='animated rotateInDownLeft modelno11'>";
		echo "<h6>RAMSIZE:\t".$row['ramsize']."</h6>";echo "</div>";
		echo"<div class='animated rotateInDownLeft modelno12'>";
		echo "<h6>RAMTYPE:\t".$row['ramtype']."</h6>";echo "</div>";
			echo"<div class='animated rotateInDownLeft modelno13'>";
		echo "<h6>USBTH:\t".$row['usbth']."</h6>";echo "</div>";
		
		echo"<div class='animated rotateInDownLeft modelno14'>";
		echo "<h6>USBSC:\t".$row['usbsc']."</h6>";echo "</div>";
		echo"<div class='animated rotateInDownLeft modelno15'>";
		echo "<h6>SATA:\t".$row['sata']."</h6>";echo "</div>";
		echo"<div class='animated rotateInDownLeft modelno16'>";
		echo "<h6>NVMECHECK:\t".$row['nvmecheck']."</h6>";echo "</div>";
		echo"<div class='animated rotateInDownLeft modelno17'>";
		echo "<h6>NVMEQUANT:\t".$row['nvmequant']."</h6>";echo "</div>";
	echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo"<div class='mm'>";
		echo "</div>";
}


}




echo "</form>";
?>

</div>
</div>

</div>
	<input class="Exit" type="submit" value="Exit" name="exit" id="exit">
	
	<div class="shape1"></div>
	<div class="round"></div>
	<div class="round1"></div>
	<div class="animated  fadeInLeft delay-1s shape">
	<div class="heads">
	<h2 class="animated  fadeInRight delay-2s">Ram Selected</h2></div>
	<?php
	if(isset($_REQUEST['submit']))
	{
	 $sql="SELECT * FROM customertable";
	 $result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {

		echo"<div class='selectedparts'>";
			echo"<div class='selectedpartsshape'>";
					$ram=$row["ramname"];
					$ramtype=$row["ramtype"];
					echo"<h3>".$ram."\t".$ramtype."</h3>";
	}
}
		?>
		<form action="Ram.php">
       <input type="submit" class ="rambutton" name="" value ="change">
       </form>
	</div></div>
			<?php
		}
		else
		{
			echo "no results";
		}
	?>
	<div class="heads">
	<h2 class="animated  fadeInLeft delay-2s">Gpu Selected</h2></div>
	<?php
	if(isset($_REQUEST['submit']))
	{
	 $sql="SELECT * FROM customertable";
	 $result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {

		echo"<div class='selectedparts'>";
			echo"<div class='selectedpartsshape'>";
					$gpuname=$row["gpuname"];
					$volt=$row["volt"];
					echo"<h3>".$gpuname."\t".$volt."</h3>";
	}
}
		?>
<form action="Ram.php">
       <input type="submit" class ="gpubutton" name="" value ="change">
       </form>
	</div></div>
			<?php
		}
	?>
	<div class="heads">
	<h2 class="animated  fadeInRight delay-2s">SMPS Selected</h2></div>
	<?php
	if(isset($_REQUEST['submit']))
	{
	 $sql="SELECT * FROM customertable";
	 $result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {

		echo"<div class='selectedparts'>";
			echo"<div class='selectedpartsshape'>";
					$suname=$row["suname"];
					$supplyvolt=$row["supplyvolt"];
					echo"<h3>".$suname."\t".$supplyvolt."</h3>";
	}
}
		?>
<form action="psu.php">
       <input type="submit" class ="smpsbutton" name="" value ="change">
       </form>
	</div></div>
			<?php
		}
	?>
	<div class="heads">
	<h2 class="animated  fadeInLeft delay-2s">SSD Selected</h2></div>
	<?php
	if(isset($_REQUEST['submit']))
	{
	 $sql="SELECT * FROM customertable";
	 $result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {

		echo"<div class='selectedparts'>";
			echo"<div class='selectedpartsshape'>";
					$sdname=$row["sdname"];
					$disksize=$row["disksize"];
					$nvme=$row["nvme"];
					echo"<h3>".$sdname."\t".$disksize."\t".$nvme."</h3>";
	}
}
		?>
<form action="sdd.php">
       <input type="submit" class ="ssdbutton" name="" value ="change">
       </form>
	</div></div>
			<?php
		}
	?>
	<div class="heads">
	<h2 class="animated  fadeInRight delay-2s">HDD Selected</h2></div>
	<?php
	if(isset($_REQUEST['submit']))
	{
	 $sql="SELECT * FROM customertable";
	 $result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {

		echo"<div class='selectedparts'>";
			echo"<div class='selectedpartsshape'>";
					$hddname=$row["hddname"];
					$disksizehd=$row["disksizehd"];
					echo"<h3>".$hddname."\t".$disksizehd."</h3>";
	}
}
		?>
<form action="hdd.php">
       <input type="submit" class ="hddbutton" name="" value ="change">
       </form>


	</div></div>
			<?php
		}
	?>
	<div class="heads">
	<h2 class="animated  fadeInLeft delay-2s">Processor Selected</h2></div>
	<?php
	if(isset($_REQUEST['submit']))
	{
	 $sql="SELECT * FROM customertable";
	 $result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {

		echo"<div class='selectedparts'>";
			echo"<div class='selectedpartsshape'>";
					$proname=$row["proname"];
					$sockettype=$row["sockettype"];
					$gen=$row["gen"];
					echo"<h3>".$proname."\t".$sockettype."\t".$gen."</h3>";
	}
}
		?>

<form action="Process.php">
       <input type="submit" class ="processorbutton" name="" value ="change">
       </form>

	</div>
			<?php
		}
	?>
		<input type="button" class ="sub" name="submit" value ="Submit" id="myBtn">
	
	</div>

<div class="starting">
	<h1>Selected Components</h1></div>
</CENTER>

</body>
</html>
<script>
	var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
var btn2 = document.getElementById("exit");
btn2.onclick = function() {
  window.open("logintry.php");
}
</script>

