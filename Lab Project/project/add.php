<?php
$myidnum = $_POST['idnum'];
$myfamname = $_POST['ctype'];
$myfirstname = $_POST['firstname'];
$mymidname = $_POST['midname'];
$myage = $_POST['age'];
$mysex = $_POST['sex'];

 
if (empty($myidnum) || empty($myfamname) || empty($myfirstname) || empty($mymidname)) 

{
  echo "<script>alert('Empty fields not allowed')</script>";
  echo "<script>location.href='admin.php'</script>";
  die();
}

$con=mysql_CONNECT('localhost','root','');

mysql_select_db("project");

$result= mysql_query("select * from student where (famname ='$myfamname' && firstname ='$myfirstname' && midname ='$mymidname') || (idnum=$myidnum)   ");
$rows=mysql_num_rows($result);

if ($rows>=1)
{
  echo "<script>alert(' Student ID or Student already exist.')</script>";
  echo "<script>location.href='admin.php'</script>";
  die();

}

mysql_query("insert into student values('$myidnum','$myfamname','$myfirstname', '$mymidname', '$myage', '$mysex')");
mysql_query("insert into user values('$myidnum','$myidnum','student')");

if ($myfamname=='IT')
{
mysql_query("insert into Icourse values('$myidnum','$myfamname')");
}

else
{
mysql_query("insert into Ccourse values('$myidnum','$myfamname')");
}

echo "<script>alert('1 Record Successfully Added')</script>";
ECHO "<script>location.href='admin.php'</script>";

?>