<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="imageprocess";
 $conn = mysqli_connect($servername, $username, $password, $db);

	if(isset($_REQUEST['submit']))
	{
	 $chk=$_REQUEST["item_select"];
	 $a=implode(",",$chk);
	 $sql="SELECT * FROM harddisk where modelno='$a'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {
				    	$hname=$row["brandname"];
				    	$hsize=$row["disk_size"];
				    	$hprice=$row["price"];
				    	
				        echo "id: " . $row["modelno"]. "Name: " . $row["brandname"];
				    }

				} 
				else
				{
				    echo "0 results";
				}
				header("location:assemble1.php?hname=$hname&hsize=$hsize&hprice=$hprice");
}

?>