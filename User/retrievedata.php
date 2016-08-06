<?php

mysql_connect('localhost','root','');
mysql_select_db('user');

$sql= "SELECT * FROM `user_1`";
$records = mysql_query($sql);
?>

<html>
<body>
<title> Data </title>
<table width = "800" cellspacing ="1" cellpadding = "1" border ="1"> 
<?php
While($user_1 = mysql_fetch_assoc($records))
{
echo "<tr>";
echo "<td>".$user_1['Username']."</td>";
echo "<td>".$user_1['Password']."</td>";
echo "<td>".$user_1['Telephone']."</td>";
echo "</tr>";
}
?>
</body>
</html>