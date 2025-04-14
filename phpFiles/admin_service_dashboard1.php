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
       <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <link rel="stylesheet" href=""> -->
</head>
<style>
body{
	background-image: url("bg1.jpg");
	background-repeat:no-repeat;
	background-size:cover;
}
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
	width:60%;
	
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
a{
	text-decoration:none;
}
	
.alpha{
	background-image:url("new10.jpg");
	background-color:blue;

#studentrecord
{
	
	height:800px;
	width:600px;
	
	background-repeat:no-repeat;
	background-size:590px 600px;
	
	margin-left:100px;
	
	
	
}
#addbook
{
	

	background-image:url("scroll2.jpg");
	background-repeat:no-repeat;
	background-size:450px 600px;
	background-position:center;
	
	height:600px;	
}
#bookreport
{
	
	height:600px;
	width:840px;
	margin-right:100px;
	background-repeat:no-repeat;
	background-size:840px 600px;
	backgound-position:center;
	
	
	
	
	
}
#bookdetail
{
	
	height:600px;
	width:750px;
	border: 1px solid rgb(115, 147, 179);
  box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.4) inset, 4px 0px 8px;
	 background-color:rgba(250,250,250,0.4);
	 margin:auto;
	
}
#bookrequestapprove
{
	
	height:600px;
	width:836px;
	background-repeat:no-repeat;
	background-size:836px 830px;
	background-position:center;
	
		
}

#addperson
{
	
	height:500px;
	background-image:url("scroll2.jpg");
	background-repeat:no-repeat;
	background-size:450px 600px;
	background-position:center;
	
	height:600px;	
}
#issuebook
{
	
	height:500px;
	background-image:url("scroll2.jpg");
	background-repeat:no-repeat;
	background-size:450px 600px;
	background-position:center;
	height:600px;	
}
#issuebookreport
{
	
	height:900px;
	width:600px
	background-color:black;;
	
	
		
}

.btn{
	width:90px;
	height:40px;
	border-radius:20px;
	background-color:pink;
	
}
.bt{
	width:800px;
	height:40px;
	border-radius:20px;
	background-color:pink;
	
}
.ba{
	width:600px;
	height:40px;
	border-radius:20px;
	background-color:pink;
	
}
p{
  background-image: url('new1.jpg');
  
}
#first{
	opacity:0;
}
#random input::placeholder
{
	color:brown;
}
table
{
	
	border-spacing:30px;
	border: 1px solid rgb(115, 147, 179);
}

#un{
	text-align:center;
}
th{
	background-color:rgba(250,250,250,0.4);
	border: 1px solid rgb(115, 147, 179);
    color: black;
}
td{
	border: 1px solid rgb(115, 147, 179);
	background-color:rgba(250,250,250,0.4);
    color: black;
}

</style>
<body>
<div class="alpha" >
<div class="container">
<div class="innerdiv">
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
<br>
<br>
<br>
<br>
<h3> ADD STUDENT </h3>
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
<br>
<br>
<input type="submit" value="SUBMIT" class="btn"/>
</form>
</div>
</div>

             

<div class="rightinnerdiv">   
            <div id="issuebook" class="innerright portion" style="display:none">
			<br>
			<br>
			<br>
            <h3>ISSUE BOOK</h3>
			<br>
			<br>
            <form action="issuebook_server.php" method="post" enctype="multipart/form-data">
            <label for="book">CHOOSE BOOK:</label>
           
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
<br>
<br>
<br>
      <label for="Select Student">SELECT STUDENT:</label>
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
<br>
<br>
<br>
           <label>DAYS</label> <input type="number" name="days"/>
<br>
<br>
<br>
<br>
            <input type="submit" value="SUBMIT" class="btn"/>
            </form>
            </div>
            </div>
			
			<div class="rightinnerdiv">   
            <div id="issuebookreport" class="innerright portion" style="display:none">
            <Button class="bt" >Issue Book Record</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->issuereport();
            $recordset=$u->issuereport();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;background:rgba(255,255,255,0.6);'><tr><th style='  
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
			<br>
			<br>
			<br>
            <button class='bt'>BOOK RECORD</button>
            <?php
            $u=new data;
            $u->setconnection();
            $u->getbook();
            $recordset=$u->getbook();

            $table="<table style='font-family:times new roman, Helvetica, sans-serif;font-weight:900;border-collapse: collapse;width:100%; margin-left:2px; margin-right:150px; margin-bottom:100px;background:rgba(255,255,255,0.6);'>
			<tr><th style='text-align:left;'>
          Book Name</th><th align='left'>Price</th><th align='left'>Qnt</th><th align='left'>Available</th><th align='left'>Rent</th></th></tr>";
            foreach($recordset as $row){
				
                $table.="<tr>";
               "<td>$row[0]</td>";
			 
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[7]</td>";
                $table.="<td>$row[8]</td>";
                $table.="<td>$row[9]</td>";
                $table.="<td>$row[10]</td>";
		
                $table.="<td><a href='admin_service_dashboard1.php?viewid=$row[0]'><button class='btn'>VIEW BOOK</button></a></td>";
                
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
			<br>
			<br>
			<br>
            <button class='bt'>BOOK REQUEST APPROVE</button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->requestbookdata();
            $recordset=$u->requestbookdata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;background:rgba(255,255,255,0.6);'><tr><th style='
            padding: 8px;text-align:left;'>Person Name</th><th align='left'>Person Type</th><th align='left'>Book name</th><th align='left'>Days </th><th align='left'>Approve</th></tr>";
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
            <br>
			<br>
			<br>
            <h3 >BOOK DETAIL</h3>
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

            <img width='350px' height='375px' style='border:1px solid #333333; float:left;margin-left:10px' src="uploads/<?php echo $bookimg?> "/>
            </br>
			<div id="un">
            <p style="color:black"><u><b>Book Name:</b></u><?php echo $bookname ?></p><br>
            <p style="color:black"><u><b>Book Detail:</b></u> <?php echo $bookdetail ?></p>
            <p style="color:black"><u><b>Book Author:</b></u> <?php echo $bookauthor ?></p>
            <p style="color:black"><u><b>Book Publisher:</b></u> <?php echo $bookpub ?></p>
            
            <p style="color:black"><u><b>Book Price:</b></u> <?php echo $bookprice ?></p>
            <p style="color:black"><u><b>Book Available:</b></u> <?php echo $bookava ?></p>
            <p style="color:black"><u><b>Book Rent:</b></u> <?php echo $bookrent ?></p>
</div>

            </div>
            </div>


  <div class="rightinnerdiv">   
            <div id="studentrecord" class="innerright portion" style="display:none">
			<div id="sam">
			<br>
			<br>
			<br>
            <button class='ba'>STUDENT RECORD</button>

              <?php
            $u=new data;
            $u->setconnection();
            $u->userdata();
            $recordset=$u->userdata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;width:100%;background:rgba(255,255,255,0.6);'><tr><th style=' 
            padding: 5px; text-align:left;'>Name</th> <th align='left'>Email</th><th align='left'>Type</th></tr>";
			
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td><a href='deleteuser.php?useriddelete=$row[0]'<button class='ba'>Delete</button></a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>
             </div>
            </div>
            </div>

<div class="rightinnerdiv">
<div id="addbook" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ echo "display:none";} else {echo ""; }?>">
<div id="random">
<br>
<br>
<br>
<br>
<h3>ADD NEW BOOK </h3>
<form action="addbookserver_page.php" method="post" enctype="multipart/form-data">
<label id="first">BOOK NAME<input type="text" name="bookname" > </label>
</br>
</br>
<label>DETAIL:</label><input type="text" name="bookdetail" id="blur1"/></br></br>
<label>AUTHOR:</label><input type="text" name="bookauthor"/></br></br>
<label>PUBLICATION:</label><input type="text" name="bookpub"/></br></br>
<div>GENRE:<input type="radio" name="branch" value="it"/> COMIC <input type="radio" name="branch" value="civil"/>MSYTERY<div style="margin-left:80px"><input type="radio" name="branch" value="ec"/>FICTION<input type="radio" name="branch" value="electrical"/>NON-FICTION </div>
</div></br></br>
<label >PRICE:</label> <input type="number" name="bookprice"/></br></br>
<label >QUANTITY:</label> <input type="number" name="bookquantity"/></br></br>
<label >BOOK PHOTO:</label> <input type="file" name="bookphoto"/></br><br>

 <input type="submit" value="SUBMIT" class="btn"/>
            </br>
            </br>

            </form>
			</div>
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