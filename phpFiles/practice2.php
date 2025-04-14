<?php
$a=mysqli_connect("localhost:3306","root","","Firstdb");
if(!($a))
{
	echo "Failed";
}
else
{
	echo "Passed";
}
/*$b="create database Firstdb";
if(mysqli_query($a,$b))
{
	echo "Database created";
}*/
/*$c="create table student(enrol int,name varchar(10),age int ,course varchar(10))";
if(mysqli_query($a,$c))
{
	echo "table created";
}*/
/*$e="insert into student values(1,'sid',11,'chem')";
if(mysqli_query($a,$e))
{
	echo "inserted";
}
*/
/*$e="insert into student values(2,'max',12,'DSA')";
if(mysqli_query($a,$e))
{
	echo "inserted";
}*/
/*$e="insert into student values(3,'Glenn',13,'DSW')";
if(mysqli_query($a,$e))
{
	echo "inserted";
}*/
$e="insert into student values(4,'Roy',13,'Maths')";
/*if(mysqli_query($a,$e))
{
	echo "inserted";
}
*/
mysqli_query($a,"update student set age=14 where course='maths'");
mysqli_query($a,"delete from student where name='Glenn'");
?>