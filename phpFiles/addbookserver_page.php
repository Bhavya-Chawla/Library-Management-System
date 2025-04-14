<?php
include("data_class1.php");
$bookname=$_POST['bookname'];
$bookdetail=$_POST['bookdetail'];
$bookauthor=$_POST['bookauthor'];
$bookpub=$_POST['bookpub'];
$bookprice=$_POST['bookprice'];
$bookquantity=$_POST['bookquantity'];
if (move_uploaded_file($_FILES["bookphoto"]["tmp_name"],"uploads/" . $_FILES["bookphoto"]["name"])) {
echo"Book updated";
    $bookpic=$_FILES["bookphoto"]["name"];

$obj=new data();
$obj->setconnection();
$obj->addbook($bookpic,$bookname,$bookdetail,$bookauthor,$bookpub,$branch,$bookprice,$bookquantity);
}
  
  
  else {
    echo "File not uploaded";
 }