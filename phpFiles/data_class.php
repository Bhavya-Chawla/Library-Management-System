<?php
session_start();
include ("db.php");
class data extends db
{
	function __construct()
	{
		
		
	}
	function adminlogin($t1,$t2)
	{
	$q="SELECT * FROM admin where email='$t1' and pass='$t2' ";
	$recordset=$this->connection->query($q);
	$result=$recordset->rowCount();
	if($result>0)
	{
		foreach($recordset->fetchAll() as $row)
		{
			$logid=$row['id'];
			$_SESSION["adminid]=$logid;
		header("Location:admin_service_dashboard.php");
	}	
	}
	else if($result<=0)
	{
	header("location:index.php?msg=Invalid credentials");
	
}
}
}
?>
