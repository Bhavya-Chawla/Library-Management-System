<?php
include("data_class1.php");
//session_start();
$adminid=$_SESSION['adminid'];
?>
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
        <!-- <link rel="stylesheet" href=""> -->
</head>
<style>
.imglogo{
	margin:auto;
	height:200px;
}
.innerdiv
{
	text-align:center;
	margin:100px;
	
}
.leftinnerdiv{
	float:left;
	width:25%;
	
}
.rightinnerdiv{
	float:right;
	width:75%;
	
}
.greenbtn{
	backgound-color:green;
	color:black;
	width:95%;
	height:40px;
	margin-top:8px;
}
a{
	text-decoration:none;
}
#issuebook
{
	color:red;
	background-color:black;
}

</style>
<body>
<div class="alpha">
<div class="container">
<div class="innerdiv">
<div class="row"> <img class="imglogo" src="new.jpg"> </div>
<div class="leftinnerdiv">
<Button class="greenbtn">ADMIN </Button>
<Button class="greenbtn" onclick="openpart('addbook')"> ADD BOOK </Button>
<Button class="greenbtn" onclick="openpart('bookreport')"> BOOK REPORT </Button>
<Button class="greenbtn" onclick="openpart('bookrequestapprove')"> BOOK REQUESTS</Button>
<Button class="greenbtn" onclick="openpart('addperson')"> ADD PERSON </Button>
<Button class="greenbtn" onclick="openpart('studentrecord')">STUDENT RECORD</Button>
<Button class="greenbtn" onclick="openpart('issuebook')"> ISSUE BOOK </Button>
<Button class="greenbtn" onclick="openpart('issuebookreport')"> ISSUE BOOK REPORT</Button>
<a href="index.php"><Button class="greenbtn"> LOGOUT </Button> </a>
</div>
<div class="rightinnerdiv">
<div id="addperson" class="inner right portion" style="display:none">
<Button class="greenbtn"> ADD PERSON </Button>
<form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
<label>NAME:</label> <input type="text" name="addname"/>
</br>
</br>
<label>PASSWORD:</label> <input type="password" name="addpass"/>
</br>
</br>
<label>EMAIL:</label> <input type="email" name="addemail"/>
</br>
</br>
<label for="typw"> CHOOSE TYPE </label>
<select name="type">
<option value="student">STUDENT <option>
<option value="teacher">TEACHER</option>
</select>
<input type="submit" value="submit"/>
</form>
</div>
</div>

             

<div class="rightinnerdiv">   
            <div id="issuebook" class="innerright portion" style="display:none">
            <Button class="greenbtn" >ISSUE BOOK</Button>
            <form action="issuebook_server.php" method="post" enctype="multipart/form-data">
            <label for="book">Choose Book:</label>
           
            <select name="book" >
            <?php
            $u=new data;
            $u->setconnection();
            $u->getbookissue();
            $recordset=$u->getbookissue();
            foreach($recordset as $row){

                echo "<option value='". $row[2] ."'>" .$row[2] ."</option>";
        
            }            
            ?>
            </select>
<br>
            <label for="Select Student">Select Student:</label>
            <select name="userselect" >
            <?php
            $u=new data;
            $u->setconnection();
            $u->userdata();
            $recordset=$u->userdata();
            foreach($recordset as $row){
               $id= $row[0];
                echo "<option value='". $row[1] ."'>" .$row[1] ."</option>";
            }            
            ?>
            </select>
<br>
           <label>Days</label> <input type="number" name="days"/>

            <input type="submit" value="SUBMIT"/>
            </form>
            </div>
            </div>
			
			<div class="rightinnerdiv">   
            <div id="issuebookreport" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Issue Book Record</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->issuereport();
            $recordset=$u->issuereport();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  
            padding: 8px;'>Issue Name</th><th>Book Name</th><th>Issue Date</th><th>Return Date</th><th>Fine</th></th><th>Issue Type</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[6]</td>";
                $table.="<td>$row[7]</td>";
                $table.="<td>$row[8]</td>";
                $table.="<td>$row[4]</td>";
                // $table.="<td><a href='otheruser_dashboard.php?returnid=$row[0]&userlogid=$userloginid'>Return</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>
<div class="rightinnerdiv">   
            <div id="bookreport" class="innerright portion" style="display:none">
            <Button class="greenbtn" >BOOK RECORD</Button>
            <?php
            $u=new data;
            $u->setconnection();
            $u->getbook();
            $recordset=$u->getbook();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style=' 
            padding: 8px;'>Book Name</th><th>Price</th><th>Qnt</th><th>Available</th><th>Rent</th></th><th>View</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[7]</td>";
                $table.="<td>$row[8]</td>";
                $table.="<td>$row[9]</td>";
                $table.="<td>$row[10]</td>";
		
                $table.="<td><a href='admin_service_dashboard1.php?viewid=$row[0]'><button type='button' class='btn btn-primary'>View BOOK</button></a></td>";
                
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>
			
			 <div class="rightinnerdiv">   
            <div id="bookrequestapprove" class="innerright portion" style="display:none">
            <Button class="greenbtn" >BOOK REQUEST APPROVE</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->requestbookdata();
            $recordset=$u->requestbookdata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='
            padding: 8px;'>Person Name</th><th>person type</th><th>Book name</th><th>Days </th><th>Approve</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
              "<td>$row[1]</td>";
              "<td>$row[2]</td>";

                $table.="<td>$row[3]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td>$row[5]</td>";
                $table.="<td>$row[6]</td>";
               // $table.="<td><a href='approvebookrequest.php?reqid=$row[0]&book=$row[5]&userselect=$row[3]&days=$row[6]'><button type='button' class='btn btn-primary'>Approved BOOK</button></a></td>";
                 $table.="<td><a href='approvebookrequest.php?reqid=$row[0]&book=$row[5]&userselect=$row[3]&days=$row[6]'><button type='button' class='btn btn-primary'>Approved</button></a></td>";
                // $table.="<td><a href='deletebook_dashboard.php?deletebookid=$row[0]'>Delete</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>
			<div class="rightinnerdiv">   
            <div id="bookdetail" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ $viewid=$_REQUEST['viewid'];} else {echo "display:none"; }?>">
            
            <Button class="greenbtn" >BOOK DETAIL</Button>
</br>
<?php
            $u=new data;
            $u->setconnection();
            $u->getbookdetail($viewid);
            $recordset=$u->getbookdetail($viewid);
            foreach($recordset as $row){

                $bookid= $row[0];
               $bookimg= $row[1];
               $bookname= $row[2];
               $bookdetail= $row[3];
               $bookauthor= $row[4];
               $bookpub= $row[5];
               $branch= $row[6];
               $bookprice= $row[7];
               $bookquantity= $row[8];
               $bookava= $row[9];
               $bookrent= $row[10];

            }            
?>

            <img width='350px' height='375px' style='border:1px solid #333333; float:left;margin-left:20px' src="uploads/<?php echo $bookimg?> "/>
            </br>
            <p style="color:black">&emsp;&emsp;&emsp;&emsp;&emsp;<u><b>Book Name:</b></u><?php echo $bookname ?></p>
            <p style="color:black">&emsp;&emsp;<u><b>Book Detail:</b></u> &nbsp<?php echo $bookdetail ?></p>
            <p style="color:black">&emsp;&emsp;&emsp;&emsp;<u><b>Book Author:</b></u> <?php echo $bookauthor ?></p>
            <p style="color:black">&emsp;&emsp;&emsp;<u><b>Book Publisher:</b></u> <?php echo $bookpub ?></p>
            <p style="color:black"><u><b>Book Branch:</b></u> <?php echo $branch ?></p>
            <p style="color:black"><u><b>Book Price:</b></u> <?php echo $bookprice ?></p>
            <p style="color:black">&emsp;<u><b>Book Available:</b></u> <?php echo $bookava ?></p>
            <p style="color:black"><u><b>Book Rent:</b></u> &nbsp&nbsp<?php echo $bookrent ?></p>


            </div>
            </div>


  <div class="rightinnerdiv">   
            <div id="studentrecord" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Student RECORD</Button>

              <?php
            $u=new data;
            $u->setconnection();
            $u->userdata();
            $recordset=$u->userdata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style=' 
            padding: 8px;'> Name</th><th>Email</th><th>Type</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td><a href='deleteuser.php?useriddelete=$row[0]'<button type='button' class='btn btn-primary'>Delete </button></a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

<div class="rightinnerdiv">
<div id="addbook" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ echo "display:none";} else {echo ""; }?>">
<Button class="greenbtn">ADD NEW BOOK </Button>
<form action="addbookserver_page.php" method="post" enctype="multipart/form-data">
<label>BOOK NAME:</label> <input type="text" name="bookname"/>
</br>
<label>DETAIL:</label><input type="text" name="bookdetail"/></br>
<label>AUTHOR:</label><input type="text" name="bookauthor"/></br>
<label>PUBLICATION:</label><input type="text" name="bookpub"/></br>
<div>GENRE:<input type="radio" name="branch" value="it"/> COMIC <input type="radio" name="branch" value="civil"/>MSYTERY<div style="margin-left:80px"><input type="radio" name="branch" value="ec"/>FICTION<input type="radio" name="branch" value="electrical"/>NON-FICTION </div>
</div>
<label >PRICE:</label> <input type="number" name="bookprice"/></br>
<label >QUANTITY:</label> <input type="number" name="bookquantity"/></br>
<label >BOOK PHOTO:</label> <input type="file" name="bookphoto"/></br>
</br>
 <input type="submit" value="SUBMIT"/>
            </br>
            </br>

            </form>
            </div>
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