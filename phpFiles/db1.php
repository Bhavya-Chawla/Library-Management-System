<?php
class db 
{
protected $connection;
function setconnection()
{
try
{
	$this->connection=new PDO("mysql:host=127.0.0.1;dbname=book_management","root","");
	/*echo"Connection done";*/
	
}
catch(PDOException $e)
{
echo "Error";	
}
}

}