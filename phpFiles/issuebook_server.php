<?php

include("data_class1.php");

$book=$_POST['book'];
$userselect= $_POST['userselect'];
$getdate= date("y/m/d");
$days= $_POST['days'];

$returnDate=Date('y/m/d', strtotime('+'.$days.'days'));

$obj=new data();
$obj->setconnection();
$obj->issuebook($book,$userselect,$days,$getdate,$returnDate);