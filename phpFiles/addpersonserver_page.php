<?php
include("data_class1.php");
$addname=$_POST['addname'];
$addpass=$_POST['addpass'];
$addemail=$_POST['addemail'];
$type=$_POST['type'];
$obj=new data();
$obj->setconnection();
$obj->addnewuser($addname,$addpass,$addemail,$type);