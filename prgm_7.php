<?php
	$con=new mysqli("localhost","root","","MACE");
	if($con->connect_error)
		die("\nconnection failed:".$con->connect_error);
//$s="create table student(rollno int primary key ,name varchar(20),department varchar(20) )";
$s="create table product(pid int primary key AUTO_INCREMENT ,pname varchar(20),quantity int,price varchar(20),man_date  date,exp_date date)";
if($con->query($s)===TRUE)
	echo "\ntable created";
else
	echo "\nfailed to create table:",$con->error;
$con->close();
?>
