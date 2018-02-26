<!DOCTYPE html>
<html>
<body>


<table border="1" width="100%">
<tr>
<td colspan="2" >
<h1> <center> <b> Branch Database </b> </center></h1>
</td>
</tr>

<tr>
<td width="10%">
<br>
<a href="ITv.php"><button type="button" style="width:100%"><b><h2>Information Technology</h2></b></button></a><br>
<a href="CSEv.php"><button type="button" style="width:100%"><b><h2>Computer Science</h2></b></button></a><br>
<a href="admin.php"><button type="button" style="width:100%"><b><h2>Back</h2></b></button></a><br>


</td>


<td style="background-color:#EEEEEE;height:200px;width:400px;">
 

<?php


$con=mysql_connect("localhost","root","");


mysql_select_db("project");

$result= mysql_query ("select * from Ccourse");

echo "<br>";
echo "<table border=5 >";

echo "<tr><th>Student ID</th><th>Course Name</th></tr>";




while($row=mysql_fetch_array($result))
{
echo "<tr><td width=5%> <center> $row[0] </center> </td> <td width=15%> <center> $row[1] </center> </td>";
}

?>




</td>
</tr>


</table>

</body>
</html> 