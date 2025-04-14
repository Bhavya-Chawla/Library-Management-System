<html>
<head>
<title>
HOTEL MANAGEMENT SYSTEM</title>
</head>
<body>
<form name="myform" action="obtain.php" method="POST">
<table cellspacing=1 cellpadding=2 border=3 >
<tr>
<td> Enter your name </td>
<td> <input type="name" name="username" placeholder="Enter your name"> </td>
</tr>
<tr>
<td> Enter room choice </td>
<td>
<input type="radio" name="roomchoice" value="Standard"> Standard
<input type="radio" name="roomchoice" value="Suite"> Suite
<input type="radio" name="roomchoice" value="Deluxe"> Deluxe
</td>
</tr>
<tr>
<td>
number of rooms
</td>
<td>
<select name="Roomnumber">
<option value="1"> 1 </option>
<option value="2"> 2</option>
<option value="3"> 3 </option>
<option value="4"> 4 </option>
<option value="5"> 5 </option>
</select>
</td>
</tr>
<tr>
<td> Check-in date </td>
<td> <input type="date" name="checkin"> </td>
</tr>
<tr>
<td> Check-out date </td>
<td> <input type="date" name="checkout"> </td>
</tr>
<tr>
<td>
<input type="button" value="Login">
<td>
<td>
<input type="submit" name="a"value="placeorder">
<td>
<td>
<input type="submit" name="b" value="maxorder">
<td>
</tr>
</table>
</form>
</body>
</html>