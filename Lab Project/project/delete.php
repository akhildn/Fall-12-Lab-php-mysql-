<?php

$mykey1=$_REQUEST['key1'];


$con = mysql_connect("localhost","root","");

mysql_SELECT_DB("project");

$result=mysql_query("delete from student where idnum = '$mykey1'");
mysql_query("delete from user where password = '$mykey1' ");
mysql_query("delete from Icourse where idnum = '$mykey1' ");
mysql_query("delete from Ccourse where idnum = '$mykey1' ");
echo "<script>location.href='view.php'</script>"

?> 