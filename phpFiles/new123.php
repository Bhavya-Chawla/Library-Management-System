<?php
$a=mysqli_connect("localhost:3306","root","","first");
if(!($a))
{
echo "failed";
}
else
{
	echo "sucess";
}
/*$b="create database first";
if(mysqli_query($a,$b))
{
	echo "database created";
}
$c="create Table customers(empid int,empname varchar(10))";
if(mysqli_query($a,$c))
{
	echo "  Table created";
}
?>*/
/*$e="insert into customers values(8,'Sham')";
if(mysqli_query($a,$e))
{
	echo "yeah";
}
$f="insert into customers values(4,'Mohan')";
if(mysqli_query($a,$f))
{
	echo "yeah";
}
$g="insert into customers values(9,'Manan')";
if(mysqli_query($a,$g))
{
	echo "yeah";
}*/
mysqli_query($a,"select * from customers");
//mysqli_query($a,"update customers set empname='damn' where empid=2");/*
//mysqli_query($a,"delete from customers where empname='damn'");

	
?>