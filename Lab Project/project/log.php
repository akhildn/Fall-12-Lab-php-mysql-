
<html>
<body>

<div id="container">

<center>
<div id="header" >
<h1 style="margin-bottom:0;"><img src="banner.png" alt="banner" width="100%" ></h1></div>
</center>


<table border="5" height=200px width="100%">
<tr>
<td>

<div id="menu" height:400px;width:10%;float:left;">
<b><h2 style="margin-bottom:0;"></h2></b>
<a href="log.php"><h3> &nbsp Login </h3></a> 
<a href="course1.php"><h3> &nbsp Courses</h3></a> 
<a href="contact.php"><h3> &nbsp contact us </h3></a> 
</div>
</td>

<td style="background-color:#EEEEEE;height:400px;width:90%;">
<center >  
<div id="container" >
<div id="content" float:left;">
 
<br>
<br>

<?php

session_start();
$con=mysql_connect("localhost", "root", "") or die(mysqli_error());

$db_found = mysql_select_db('project');
if ($db_found){
		

echo "<form action='logme.php' method='POST'>";
echo "<center><table border=1>";
echo "<tr><td>Username</td><td><input type='text' name='uname'></td></tr>";
echo "<tr><td>Password</td><td><input type='password' name='upass'></td></tr>";
echo "
<td><select name='type'>
		<option value='student'>Student</option>
         	<option value='administration'>Administrator</option>
</select></td> ";
echo "<td><input type='submit' value='ok' name='log'><input type='reset' name='cancel'></td>";
echo "</tr></table>";
echo "</form>";
}

else{
	include("dbase.php");
	
}
?>
<a href="index.php"><button type="button">Home</button></a>
</div>
</div>

 </center> </td>

</table>

</html>
