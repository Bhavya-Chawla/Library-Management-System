<?php
$emailmsg="";
$pasdmsg="";
$msg="";
$ademailmsg="";
$adpasdmsg="";
if(!empty($_REQUEST['ademailmsg']))
{
	$ademailmsg=$_REQUEST['ademailmsg'];
}
if(!empty($_REQUEST['adpasdmsg']))
{
	$adpasdmsg=$_REQUEST['adpasdmsg'];
}
if(!empty($_REQUEST['emailmsg']))
{
	$emailmsg=$_REQUEST['emailmsg'];
}
if(!empty($_REQUEST['pasdmsg']))
{
	$pasdmsg=$_REQUEST['pasdmsg'];
}
if(!empty($_REQUEST['msg']))
{
	$msg=$_REQUEST['msg'];
}
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style15.css">
</head>
<body>
<div class="first">
<div class="container login_container">

<div class="row"> <h4> <?php echo $msg?> </h4> </div>
<div class="row">
<div class="col-md-6 login-form-1">
<div class="login-container">
<div class="avatar-container">
            <img src="Animal.jpg" alt="Animal Avatar" id="avatar" class="avatar">
            <div class="eyes" id="left-eye"></div>
            <div class="eyes" id="right-eye"></div>
        </div>
<h3> Student Login </h3>
<form action="login_server_page1.php" method="get" >
<div class="form-group">
<input type="text" class="form-control" name="login_email" placeholder="Enter your Email" oninput="handleInput('email')" required>
</div>
<Label style="color:red"> <?php echo $emailmsg?> </label>
<div>
<br>
<br>
</div>
<div class="form-group">
<input type="password" class="form-control" name="login_password" placeholder="Enter your password "oninput="handleInput('password')" required>
</div>
<Label style="color:red"> <?php echo $pasdmsg?> </label>
<div>
<br>
</div>
<div class="form-group">
<input type="submit" class="btnSubmit" value="Login">
</div>
<div class="form-group">
<a href="#" class="ForgetPwd"> Forget password ?</a>
</div>
</form>
</div>
</div>
<div class="col-md-6 login-form-2">
<div class="login-container">
<div class="avatar-container">
            <img src="Animal.jpg" alt="Animal Avatar" id="avatar" class="avatar">
            <div class="eyes" id="left-eye"></div>
            <div class="eyes" id="right-eye"></div>
        </div>
<h3> Admin Login </h3>
<form action="loginadmin1_server_page.php" method="get">
<div class="form-group">
<input type="text" class="form-control" name="login_email" placeholder="Enter your Email" oninput="handleInput('email')" required>
</div>
<div>
<br>
<br>
</div>
<Label style="color:red"> <?php echo $ademailmsg?> </label>
<div class="form-group">
<input type="password" class="form-control" name="login_password" placeholder="Enter your password" oninput="handleInput('password')" required>
</div>
<Label style="color:red"> <?php echo $adpasdmsg?> </label>
<div>
<br>
</div>
<div class="form-group">
<input type="submit" class="btnSubmit" value="Login">
</div>
<div class="form-group">
<a href="#" class="ForgetPwd"> Forget password ?</a>
</div>
</form>
</div>
</div>
<script src="script.js"></script>



<script>
function handleInput(inputType) {
    const leftEye = document.getElementById('left-eye');
    const rightEye = document.getElementById('right-eye');

    if (inputType === 'email') {
        // Eyes open when typing email
        leftEye.style.height = '0px';
        rightEye.style.height = '0px';
    } else if (inputType === 'password') {
        // Eyes close when typing password
        leftEye.style.height = '20px';
        rightEye.style.height = '20px';
    }
}
</script>
</body>
</html>

