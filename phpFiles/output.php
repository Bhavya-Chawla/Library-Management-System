<?php
$z=mysqli_connect("localhost:3306","root","","entry");
if($z)
{
	echo"connected";
}
/*$b="Create database entry";
if(mysqli_query($a,$b))
{
	echo "databse created";
}*/
/*$c="create table orders(orderid int,ordername varchar(10))";
if(mysqli_query($a,$c))
{
	echo "Table created";58/
}*/
$a=$_POST['username'];
$b=$_POST['userpassword'];
$d="insert into orders values($b,'$a')";
if(mysqli_query($z,$d))
{
	echo "Insert sucess";
}
?>
