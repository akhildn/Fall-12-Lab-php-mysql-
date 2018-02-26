
<html>
<body bgcolor="WHITE" text=" Black ">

<center>

<?php


$con=mysql_connect("localhost","root","");


mysql_select_db("project");

$result= mysql_query ("select * from student");

echo "<br>";
echo "<table border=5 >";

echo "<tr><th>Student ID</th><th>Course Name</th><th>Name</th><th>Surname</th><th>Age</th><th colspan=2 width=10%>Action</th></tr>";

while($row=mysql_fetch_array($result))
{

   echo "<tr><td width=5%> $row[0] </td><td width=15%> $row[1] </td><td width=15%> $row[2] </td><td width=15%> $row[3]</td><td width=15%> $row[4]</td>" . 

     "<td width=4% align = 'center' > <a href='delete.php?key1=" . $row[0] . "'> [delete] </a>" .

     "<a href = 'edit.php?key1=" . $row[0] . "&key2=" . $row[1] . "&key3=" . $row[2] . "&key4=" . $row[3] . "&key5=" . $row[4]. "&key6=" . $row[5] .      "'> [edit] </a></td></tr>" ;

}

?> 

</body>
<a href="admin.php"><button type="button"><h1>back</h1></button></a>
</html>
