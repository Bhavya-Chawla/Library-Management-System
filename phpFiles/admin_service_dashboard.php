<?php
session_start();
//$adminid=$_SESSION["adminid"];
?>
<html>
<head>
<link rel="stylesheet" href=" ">


<style>
.imglogo{
margin:auto;
}
.innerdiv
{
	text-align:center;
	margin:100px;
	background-color:red;
}
.leftinnerdiv
{
	float:left;
	width:25%;
}
.greenbtn
{
background-color:rgb(16,170,16);
color:white;
width:95%;
height:40px;
margin-top:8px;
}	
</style>
</head>
<body>
<div class="container">
<div class="innerdiv">
<div  class="row"> <img class="imglogo" src="new.jpg"/></div>
<div class="leftinnerdiv">
<Button class="greenbtn">  Admin </Button>
<Button class="greenbtn" onclick="openpart('addbook')"> ADD BOOK </Button>
<Button class="greenbtn" onclick="openpart('bookreport')"> BOOK REPORT </Button>
<Button class="greenbtn" onclick="openpart('bookrequestapprove')"> BOOK REQUESTs </Button>
<Button class="greenbtn" onclick="openpart('addperson')"> ADD STUDENT </Button>
<Button class="greenbtn" onclick="openpart('studentrecord')"> STUDENT REPORT</Button>
<Button class="greenbtn" onclick="openpart('issuebook')"> ISSUE BOOK  </Button>
<Button class="greenbtn" onclick="openpart('issuebookreport')"> ISSUE REPORT </Button>
<a href="index.php"> <Button class="greenbtn"> LOGOUT </Button></a>
</div>
<div  class="rightinnerdiv">
<div id="bookrequestapprove" class="innerright portion" style="display:none">
<Button class="greenbtn">BOOK REQUEST APPROVE </Button>
</div>
</div>
<script>
function openpart(portion)
{
	var i;
	var x=document.getElementByClassName("portion");
	for(i=0;i<x.length;i++)
	{
		x[i].style.display="none";
	}
	document.getElementById(portion).style.display="block";
}
</script>
</body>
</html>