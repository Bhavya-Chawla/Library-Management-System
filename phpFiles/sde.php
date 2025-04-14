<html>
<body>
<form action="receive.php" name="myform" method="post" onsubmit="return(validate());" >
<table cellspacing =1 cellpadding=2 border=1>
<tr>
<td>Enter your name </td>
<td> <input type="text" name="username" placeholder="Enter your name"> </td>
</tr>
<tr>
<td> Enter your password </td>
 <td> <input type="text" name="userpassword" placeholder="Enter your password"> </td>
 </tr>
 <tr>
 <tr>
<td> Enter your Email </td>
 <td> <input type="text" name="useremail" placeholder="Enter your Email"> </td>
 </tr>
 <tr>
 <td> <input type="submit" value="login">
 </tr>
</table>
</form>
<script type="text/javascript">
function validate()
{
	if(document.myform.username.value=="")
	{
		alert("please provide name");
		return false;
	}
	if(document.myform.useremail.value=="")
	{
		alert("please provide email");
		return false;
	}
	var a=document.myform.useremail.value;
	b=a.indexof("@");
	c=a.lastIndexof(".");
	if(b<5 ||(c-b)<5)
	{
		alert ("eerror");
		return false;
	}
	return true;
}
</script>
</body>
</html>