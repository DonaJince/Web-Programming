<?php
	$con=new mysqli("localhost","root","","MACE");
	if($con->connect_error)
		die("\nconnection failed:".$con->connect_error);
$s="select  *from product";
if($con->query($s)==TRUE)
{
	$result=$con->query($s);
	if($result->num_rows>0)
	{	
		?>
		<table border="1">
		<tr>
		<th>PRODUCT ID</th>
		<th>PRODUCT NAME</th>
		<th>QUANTITY</th>
		<th>UNIT PRICE</th>
		<th>MANUFACTURED DATE</th>
		<th>EXPIRY DATE</th>
		</tr>
		<?php
		while($row=$result->fetch_assoc())
		{
	echo "<tr><th>".$row['pid']."</th><th>".$row['pname']."</th><th>".$row['quantity']."</th><th>".$row['price']."</th><th>".$row['man_date']."</th><th>".$row['exp_date']."</th></tr>";
		}
	}
	echo "</table>";
}
else
	echo "\nfailed to display details:",$con->error;
$con->close();
?>
