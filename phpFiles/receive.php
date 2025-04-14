<?php
$a=mysqli_connect("localhost:3306","root","","history");
if($a)
{
	echo  "passed";
}
/*$b="create database history";
if(mysqli_query($a,$b))
{
	echo "database created";
}*/
/*$c="create table football(name varchar(10),id int,salary int)";
if(mysqli_query($a,$c))
{
	echo "table created";
}*/
$x=$_POST['username'];
$y=$_POST['userpassword'];
$z=$_POST['useremail'];
$d="insert into football values('$x',$y,$z)";
if(mysqli_query($a,$d))
{
	echo "inserted ";
}
?>