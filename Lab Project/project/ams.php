<!DOCTYPE html>
<html>
<body>

<?php
$stype=$_POST["sid"];
echo $stype;
?>

<table border="1" width="100%">
<tr>
<td colspan="2" >
<h1> <center> <b> Welcome admin </b> </center></h1>
</td>
</tr>

<tr>
<td width="10%">
<br>
<a href="view.php"><button type="button" style="width:100%"><b><h2>view all students</h2></b></button></a><br>
<a href="viewB.php"><button type="button" style="width:100%"><b><h2>view by Branch</h2></b></button></a><br>
<a href="register.php"><button type="button" style="width:100%"><b><h2> add student </h2> </b></button></a> <br>
<a href="am.php"><button type="button" style="width:100%"><b><h2>add marks </h2></b></button></a><br>
<a href="log.php"><button type="button" style="width:100%"><b><h2> log out </h2></b></button></a><br>



</td>


<td style="background-color:#EEEEEE;height:200px;width:400px;">
<center>
<?php

echo "<form action=add.php method=POST>";

echo "<center><table>";
echo  "<TR><TD>ID Number</TD><TD><INPUT TYPE=text name='idnum' ></TD></TR>";

echo  "<TR><TD>Couse Name</TD><TD> <select name='ctype'>
		<option value='IT'>IT</option>
         	<option value='CSE'>CSE</option>
		</select> </TD></TR>";

echo  "<TR><TD>Name</TD><TD><INPUT TYPE=text name='firstname' ></TD></TR>";
echo  "<TR><TD>Surname</TD><TD><INPUT TYPE=text name='midname' ></TD></TR>";
echo  "<TR><TD>Age</TD><TD><INPUT TYPE=text name='age' ></TD></TR>";
echo  "<TR><TD>Sex</TD><TD><INPUT TYPE=text name='sex' ></TD></TR>";



echo "<TR><TD><INPUT TYPE=submit value=add></TD><TD><INPUT TYPE=reset value='reset all'></TD></TR></table>";

?>

<a href="admin.php"><button type="button">back</button></a>
</center>

</td>
</tr>


</table>

</body>
</html> 