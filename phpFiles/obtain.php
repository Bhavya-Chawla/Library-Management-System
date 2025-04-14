<?php
$a=mysqli_connect("localhost:3306","root","","new");
if($a)
{
	echo "connect";
}
else
{
	echo"faild";
}
/*$b="create database new";
if(mysqli_query($a,$b))
{
	echo "pass";
}*/
/* $c="create table data(username varchar(10),roomtype varchar(10),roomnumber int,checkin date,checkout date)";
if(mysqli_query($a,$c))
{
	echo "Yes";
}*/
$z=$_POST['username'];
$b=$_POST['roomchoice'];
$c=$_POST['Roomnumber'];
$d=$_POST['checkin'];
$e=$_POST['checkout'];
 $g=2;
$h=2;
$i=2;
if($b='Standard')
{
	$g=$g-$c;
}
if($b='Deluxe')
{
	$h=$h-$c;
}
if($b='Suite')
{
	$i=$i-$c;
}
if($g<0||$h<0||$i<0)
{
	echo "Not possible";
}
else
{
$f="insert into data values('$z','$b',$c,'$d','$e')";
if(mysqli_query($a,$f))
{
	echo "yipee";
}
}
?>