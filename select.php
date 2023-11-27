<?php
	$con=new mysqli("localhost","root","");
	if($con->connect_error)
		die("\nconnection failed:".$con->connect_error);
$s="select * from student";
if($con->query($s)===TRUE)
{
	$result=$con->query($s);
	if($result->num_rows>0)
	{	
		?>
		<table border="1">
		<tr>
		<th>ROLL NO</th>
		<th>NAME</th>
		<th>DEPARTMENT</th>
		</tr>
		<?php
		while($row=$result->fetch_assoc())
		{
			echo "<tr><th>".$row[0]."</th><th>".$row[1]."</th><th>".$row[2]."</th></tr>";
		}
	}
	echo "</table>"
}
else
	echo "\nfailed to display
	 details:",$con->error;
$con->close();
?>
