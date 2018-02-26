<html>

<?php
error_reporting(E_WARNING);

$myuser = $_POST['uname'];
$mypass= $_POST['upass'];
$mytype=$_POST['type'];


$con = mysql_connect("localhost","root","");

if (!$con)
{
  die();
}

mysql_select_db("project");

$result = mysql_query("select * from user where username = '$myuser' and password='$mypass'");
$type = mysql_query("select level from user where username = '$myuser'");

if (mysql_num_rows($result)>0)
{
   $row = mysql_fetch_array($result);

   if ($row[2]=='admin' && $mytype=='administration'){
        echo "<script>location.href='admin.php?admin=$myuser'</script>";
	    }
   elseif ($row[2]=='student' && $mytype=='student'){
	echo "<script>location.href='student.php?userid=$myuser'</script></a>";
	
	}

   else
      {
	  echo "<script>alert('not a registered user ')</script>";
	  echo "<script>location.href='index.php'</script>"; 
      } 

}

else
{
	  echo "<script>alert('not a registered user ')</script>";
	  echo "<script>location.href='index.php'</script>";

}
?>
</html>