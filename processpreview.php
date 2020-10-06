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
	 $sql="SELECT * FROM processor where model_no='$a'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{

				    while($row = mysqli_fetch_assoc($result))
				    {
				    	$pname=$row["name"];
				    	$ptype=$row["socket_type"];
				    	$pgen=$row["gen"];
				    	
				        echo "id: " . $row["model_no"]. "Name: " . $row["name"];
				    }

				} 
				else
				{
				    echo "0 results";
				}
				header("location:assemble1.php?pgen=$pgen&pname=$pname&ptype=$ptype");
}

?>