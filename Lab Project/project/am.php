<!DOCTYPE html>
<html>
<body>

<form action=ams.php method=POST>
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

<?php 
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"project");
$result=mysqli_query($con,"select idnum from student ");
echo " <center> <b> Enter marks this student:</b>  <INPUT TYPE=text name='sid' > </center> ";
?>

<a href="ams.php"><center> <button type="button" style="width:40%"><b><h4>add marks for this student </h4></b></button> </center></a><br>

</td>
</tr>
</table>

</form>
</body>
</html> 