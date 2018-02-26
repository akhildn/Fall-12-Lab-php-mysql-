<?php

$myidnum = $_POST['idnum'];
$myfamname = $_POST['famname'];
$myfirstname = $_POST['firstname'];
$mymidname = $_POST['midname'];
$myage = $_POST['age'];
$mysex = $_POST['sex'];

$key1 = $_REQUEST['key1'];




$con=mysql_CONNECT('localhost','root','');

mysql_select_db("project");

mysql_query("update student set  famname ='$myfamname', firstname='$myfirstname', midname='$mymidname', age='$myage', sex='$mysex' where idnum = '$key1'");

echo "<script>alert('Successfully Updated')</script>";
echo "<script>location.href='view.php'</script>";

?>