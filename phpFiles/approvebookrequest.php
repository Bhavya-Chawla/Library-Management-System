<?php

include("data_class1.php");




$request=$_GET['reqid'];
$book=$_GET['book'];
$userselect= $_GET['userselect'];
$getdate= date("y/m/d");
$days= $_GET['days'];

$returnDate=Date('y/m/d', strtotime('+'.$days.'days'));

$obj=new data();
$obj->setconnection();
$obj->issuebookapprove($book,$userselect,$days,$getdate,$returnDate,$request);
