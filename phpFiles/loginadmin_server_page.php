<?php
include("data_class.php");
$login_email=$_GET['login_email'];
$login_password=$_GET['login_password'];
if($login_email==null||$login_password==null)
{
	$emailmsg=" ";
	$pasdmsg=" ";
	if($login_email==null)
	{
		$emailmsg="Email empty";
	}
	if($login_password==null)
	{
		$pasdmsg="Password empty";
	}
	header("Location:index.php?ademailmsg=$emailmsg&adpasdmsg=$pasdmsg");
}
else if($login_email!=null&&$login_password!=null)
{
	$obj=new data();
	$obj->setconnection();
	$obj->adminlogin($login_email,$login_password);
}
?>