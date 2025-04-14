<html>
<head>
<title>
THE FORM
</title>
</head>
<body>
<form action="output.php" method="post" name="dataform" onsubmit="return(validate());">
<table cellspacing=2 cellpadding=2 border=2>
<tr>
<td> Enter your name</td>
<td> <input type="text" name="username" placeholder="Enter your name"> </td>
</tr>
<tr>
<td> Enter your password</td>
<td> <input type="password" name="userpassword" placeholder="Enter your password"> </td>
</tr>
<tr>
<td> <input type="Submit" value="Login">
</td>
</table>
</form>
<script type="text/javascript">
function validate()
{
	if(document.dataform.username.value=="")
	{
		alert("Fill the username");
		return false;
	}
	return true;
}
</script>
</body>
</html>