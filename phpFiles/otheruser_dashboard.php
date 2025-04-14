<?php

$userloginid=$_SESSION["userid"] = $_GET['userlogid'];



?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
    </head>
    <style>
	body{
	background-image: url("bg1.jpg");
	background-repeat:no-repeat;
	background-size:cover;
}
.container,
.row,
.imglogo {
    margin:auto;
}

.innerdiv {
    text-align: center;
    /* width: 500px; */
    margin: 100px;
}
input{
    margin-left:20px;
}

.leftinnerdiv {
    float: left;
    width: 25%;
}
.rightinnerdiv {
	border: 1px solid rgb(115, 147, 179);
  box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.4) inset, 4px 0px 8px;
    float: right;
    width: 73%;
	 background-color:rgba(250,250,250,0.4);
	 
}
.greenbtn{
	background-color:white;
	color:black;
	width:95%;
	height:50px;
	margin-top:4px;
	border-radius:100px;
	opacity:0.6;
	box-shadow:0 0 5px grey,0 0 25px grey;
	
}
.greenbtn:hover
{
	box-shadow:0 0 5px grey,0 0 25px grey,0 0 50px grey,0 0 100px grey,0 0 200px grey;
	opacity:1;
}
.innerright {
 
}

.greenbtn {
    background-color: lightgray;
    color: black;
    width: 95%;
    height: 40px;
    margin-top: 8px;
}

.greenbtn,
a {
    text-decoration: none;
    color: black;
    font-size: large;
}

th{
	background-color:rgba(250,250,250,0.4);
	border: 1px solid rgb(115, 147, 179);
    color: black;
	box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.4) inset, 4px 0px 8px;
}
td{
	border: 1px solid rgb(115, 147, 179);
	background-color:rgba(250,250,250,0.4);
    color: black;
	box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.4) inset, 4px 0px 8px;
}
td, a{
    color:black;
}

#myaccount{
	height:500px;
	width:600px;
}
#requestbook{
	height:500px;
	width:660px;
}
#issuereport{
	height:500px;
	width:660px;
}
h2{
-webkit-text-stroke: 2px black;
	color:#B5651D ;
	font-size: 2.5em;
	margin-top:3px
}
p{
    margin:auto;
	margin-left:20px;
	-webkit-text-stroke: 0.5px black ;
	color:black;
	font-size:20px;
  width: 350px;
  height: -10px;
  background-color:rgba(181,170,19,0.6);
  transition: width 0.5s;
}
p:hover {
  width: 500px;
}
	
    </style>
    <body>

    <?php
   include("data_class1.php");
    ?>
           <div class="container">
            <div class="innerdiv">
            <div class="row"></div>
            <div class="leftinnerdiv">
                <br>
                <Button class="greenbtn" onclick="openpart('myaccount')">   My Account</Button><br><br><br>
                <Button class="greenbtn" onclick="openpart('requestbook')"> Request Book</Button><br><br><br>
                <Button class="greenbtn" onclick="openpart('issuereport')"> Book Report</Button><br><br><br>
                <a href="index.php"><Button class="greenbtn" > LOGOUT</Button></a>
            </div>


            <div class="rightinnerdiv">   
            <div id="myaccount" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ echo "display:none";} else {echo ""; }?>">
            <h2><u>MY ACCOUNT</u></h2><br>

            <?php

            $u=new data;
            $u->setconnection();
            $u->userdetail($userloginid);
            $recordset=$u->userdetail($userloginid);
            foreach($recordset as $row){

            $id= $row[0];
            $name= $row[1];
            $email= $row[2];
            $pass= $row[3];
            $type= $row[4];
            }               
                ?>

            <p style="color:black"><u><b>Person Name:</b></u> &nbsp&nbsp<?php echo $name ?></p><br>
			<br>
			<br>
            <p style="color:black"><u><b>Person Email:</b></u> &nbsp&nbsp<?php echo $email?></p><br>
			<br>
			<br>
            <p style="color:black"><u><b>Account Type:</b></u> &nbsp&nbsp<?php echo $type ?></p>
        
            </div>
            </div>


            



            <div class="rightinnerdiv">   
            <div id="issuereport" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ echo "display:none";} else {echo "display:none"; }?>">
            <h2><u>BOOK RECORD</u></h2>

            <?php

            $userloginid=$_SESSION["userid"] = $_GET['userlogid'];
            $u=new data;
            $u->setconnection();
            $u->getissuebook($userloginid);
            $recordset=$u->getissuebook($userloginid);

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  
            padding: 8px;'>Name</th><th>Book Name</th><th>Issue Date</th><th>Return Date</t</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[6]</td>";
                $table.="<td>$row[7]</td>";
                //$table.="<td>$row[8]</td>";
               // $table.="<td><a href='otheruser_dashboard.php?returnid=$row[0]&userlogid=$userloginid'><button type='button' class='btn btn-primary'>Return</button></a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>


            <div class="rightinnerdiv">   
            <div id="return" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ $returnid=$_REQUEST['returnid'];} else {echo "display:none"; }?>">
            <h2><u>Return Book</u></h2>

            <?php

            $u=new data;
            $u->setconnection();
            $u->returnbook($returnid);
            $recordset=$u->returnbook($returnid);
                ?>

            </div>
            </div>


            <div class="rightinnerdiv">   
            <div id="requestbook" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ $returnid=$_REQUEST['returnid'];echo "display:none";} else {echo "display:none"; }?>">
            <h2><u>Request Book</u></h2>
<br>
<br>
            <?php
            $u=new data;
            $u->setconnection();
            $u->getbookissue();
            $recordset=$u->getbookissue();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr>
            <th>Image</th><th>Book Name</th><th>Book Authour</th><th>price</th></th><th>Request Book</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
               $table.="<td><img src='uploads/$row[1]' width='100px' height='100px' style='border:1px solid #333333;'></td>";
               $table.="<td>$row[2]</td>";
                $table.="<td>$row[4]</td>";
                //$table.="<td>$row[6]</td>";
                $table.="<td>$row[7]</td>";
                $table.="<td><a href='requestbook.php?bookid=$row[0]&userid=$userloginid'><button type='button' class='btn btn-primary'>Request Book</button></a></td>";
           
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;


                ?>

            </div>
            </div>

        </div>
        </div>


        <script>
        function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(portion).style.display = "block";  
        }
		

   
 
        
        </script>
    </body>
</html>