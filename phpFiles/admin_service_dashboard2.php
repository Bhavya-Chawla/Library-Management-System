<?php
session_start();
$adminid= $_SESSION['adminid'];
/*echo $adminid;
if($adminid==null)
{
	header("Location:index.php");
}*/
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
.imglogo{
	margin:auto;
	height:200px;
	margin-top:0px;
	width:40%;
	
}
.innerdiv{
	text-align:center;
	margin:50px;
	background-color:yellow;
	
}
.greenbtn{
	backgound-color:green;
	color:Black;
	width:95%;
	height:40px;
	margin-top:8px;
}
.leftinnerdiv
{
	float:left;
	width:25%;
}
.rightinnerdiv
{
	float:right;
	width:75%;
}
</style>
<body>
<div class="container">
<div class="innerdiv">
<div class="row"> <img class="imglogo" src="new.jpg"/> </div>
<div class="leftinnerdiv">
<Button class="greenbtn"> ADMIN </Button>
<Button class="greenbtn" onclick="openpart('addbook')">ADD BOOK </Button>
<Button class="greenbtn" onclick="openpart('bookreport')">BOOK REPORT </Button>
<Button class="greenbtn" onclick="openpart('bookrequestapprove')">BOOK REQUESTS </Button>
<Button class="greenbtn" onclick="openpart('addperson')">ADD STUDENT</Button>
<Button class="greenbtn" onclick="openpart('studentrecord')">STUDENT REPORT </Button>
<Button class="greenbtn" onclick="openpart('issuebook')">ISSUE BOOK </Button>
<Button class="greenbtn" onclick="openpart('issuebookreport')">ISSUE REPORT </Button>
<a href="index.php"> <Button class="greenbtn"> LOGOUT </Button> </a>
</div>

<div class="rightinnerdiv">
<div id="addperson" class="innerright portion" style="visibility:hidden">
<Button class="greenbtn"> ADD PERSON </Button>

<form action="addpersonsserver_page.php" method="post" enctype="multipart/form-data">
<label> Name:</label> <input type="text" name="addname"/>
</br>
<label> password:</label> <input type="password" name="addpass"/>
</br>
<label> Email: </label> <input type="email" name="addemail"/></br>
<label for="typw"> Choose type: </label>
<select name="type">
<option value="student">student </option>
<option value="teacher">teacher</option>
</select>
<input type="submit" value="SUBMIT"/>
</form>
</div>
</div>
</div>
</div>
<script>
function openpart(portion)
{
	var i;
	var x=document.getElementByClassName("innerright portion");
	for(i=0;i<x.length;i++)
	{
		x[i].style.display="none";
	}
	document.getElementById(portion).style.visibility="visible";
}
</script>
</body>
</html>