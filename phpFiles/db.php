<?php
class db 
{
protected $connection;
function setconnection()
{
try
{
	$this->connection=new PDO("mysql:host=127.0.0.1;dbname=library_management_system","root","");
	
}
catch(PDOException $e)
{
echo "Error";	
}
}

}