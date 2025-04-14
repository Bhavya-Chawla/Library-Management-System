<?php
$con=mysqli_connect("localhost:3306","root","","restaurant");
if($con)
{
echo ("Connected Successfully");
}
else
{
echo ("Not Connected".mysqli_connect_error($con));
}
/*
$sql="CREATE DATABASE restaurant";
if(mysqli_query($con,$sql))
{
echo "Database Created Successfully";
}
else
{
echo("Not Connected".mysqli_error());
}
*/
$c="create table order(orderid int,dishid int,dishname varchar(30),custid int,rating int,orderdate date)";
if(mysqli_query($con,$c))
{
echo "Table Created Successfully";
}
else
{
echo "Table Not Created".mysqli_error();
}
?>