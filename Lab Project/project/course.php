<html>

<?php
$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"project");
$myuser=$_GET['userid'];
?>

<head>
<br>
<table border="3" width="100%">
<tr>
<td>

<center>
<font color='#660099' size=2>
<blink>
<marquee behavior=alternate DIRECTION=RIGHT >
<?php
echo "<B> <h1> Welcome to $myuser </h1> </B>";
?>
</marquee>
</blink>
</font>
</center>
</td>
</tr>
</table>

<table border= "2" height="70%" width="100%">
<tr>

<td style="height:"40%";width:12% ">

<UL id='headerjohn'>
<?php 

echo "<li><a href='profile.php?userid=$myuser'' title='click here to view profile'><b> <font color='#2B547E'> Profile </font></b></a> ";
echo "<li><a href='course.php?userid=$myuser'  title='click here to view course catalog' ><font color='#2B547E'><b>CourseCatalog</b></font></a>";																						
echo "<li><a href='marks.php?userid=$myuser'  title='click here to view grades'> <b><font color='#2B547E'>Marks</b></a>" ;
echo "<li><a href='feedback.php?userid=$myuser'  title='click here to view Feedbacks' ><font color='#2B547E'><b>Feedback</b></font></a>";
echo "<li><a href='logout.php?userid=$myuser' title='click here to logout'><font color='#2B547E'><b>Logout</b></font></a><font color='#2B547E' size=2>";
?>

</ul>
</td>

<td style="background-color:#EEEEEE;height:70%;width:88%;">

<?php

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"project");

$cname=mysqli_query($con,"select famname from student where idnum='$myuser' limit 1");
$value = mysqli_fetch_array($cname);

if($value[0]=='IT')
{
$result=mysqli_query($con,"select * from iccatalog");
while($row = mysqli_fetch_array($result))
{
	echo " &nbsp &nbsp &nbsp <b> $row[0] </b> ";
	echo " &nbsp &nbsp &nbsp <b> $row[1] </b> ";
	echo " &nbsp &nbsp &nbsp <b> $row[2] </b> <br>";
	

}	
}

else
{
$result=mysqli_query($con,"select * from cccatalog");
while($row = mysqli_fetch_array($result))
{
	echo " &nbsp &nbsp &nbsp <b> $row[0] </b> ";
	echo " &nbsp &nbsp &nbsp <b> $row[1] </b> ";
	echo " &nbsp &nbsp &nbsp <b> $row[2] </b> </br>";
	
	

}	
}



?>


 </td>


</table>



</head>
</html>