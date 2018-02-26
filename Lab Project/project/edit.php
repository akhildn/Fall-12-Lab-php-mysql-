<html>
<?php
$mykey1=$_REQUEST['key1'];
$mykey2=$_REQUEST['key2'];
$mykey3=$_REQUEST['key3'];
$mykey4=$_REQUEST['key4'];
$mykey5=$_REQUEST['key5'];
$mykey6=$_REQUEST['key6'];


echo "<form action='update.php?key1=" . $mykey1 .  "'method='POST'>";


echo "<center><table>";
echo  "<TR><TD>Course Name</TD><TD><INPUT TYPE=text name='famname' value=$mykey2 ></TD></TR>";
echo  "<TR><TD>Name</TD><TD><INPUT TYPE=text name='firstname' value=$mykey3 ></TD></TR>";
echo  "<TR><TD>Surname</TD><TD><INPUT TYPE=text name='midname'  value=$mykey4></TD></TR>";
echo  "<TR><TD>Age</TD><TD><INPUT TYPE=text name='age' value=$mykey5 ></TD></TR>";
echo  "<TR><TD>Sex</TD><TD><INPUT TYPE=text name='sex' value=$mykey6 ></TD></TR>";



echo "<TR><TD><INPUT TYPE=submit value=UPDATE></TD><TD><INPUT TYPE=reset value='reset'></TD></TR></table>";
?>
<a href="admin.php"><button type="button">back</button></a>
</html> 