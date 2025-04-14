<?php
$a=mysqli_connect("localhost:3306","root","","mnew");
if(!($a))
{
	echo "failed";
}
else
{
	echo "sucessfully established connection";
}
/*$b="create database mnew";
if(mysqli_query($a,$b))
{
	echo "database created sucesfully";
}*/
/*$c="create table employees(Empname varchar(10),EmpId int,Empsal int)";
if(mysqli_query($a,$c))
{
	echo "Table created sucesfully";
}*/
/*$d="insert into employees values('sid',1,1000),('sim',2,2000),('pog',3,5000),('maxi',4,500)";
/*if(mysqli_query($a,$d))
{
	echo "Values inserted sucesfully";
}*/
mysqli_query($a,"update employees set EmpId=400 where Empname='pog'");
mysqli_query($a,"delete from employees where Empsal=500");
$z="select * from employees where EmpId<3";
$result=mysqli_query($a,$z);
while($row=mysqli_fetch_array($result))
{
	echo "<br>";
echo $row['Empname']." ".$row['EmpId']." ".$row['Empsal'];
}
?>