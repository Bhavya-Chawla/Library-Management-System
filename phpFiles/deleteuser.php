<?php
include("data_class1.php");
$deleteuser=$_GET['useriddelete'];
$obj=new data();
$obj->setconnection();
$obj->deleteuserdata($deleteuser);