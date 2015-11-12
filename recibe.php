<?php
 
$con = mysql_connect("localhost","root","speedtouch");
 
mysql_select_db("chat");
 
if (!$con)
 
{
 
die('Could not connect: ' . mysql_error());
 
}
 
$sql ="SELECT * FROM chat ORDER BY cod DESC limit 0, 10";
 
$result= mysql_query($sql,$con);
 
while( $row = mysql_fetch_array ( $result )) {
 
echo "<B>";
 
echo $row [ "usuario" ];
 
echo ":</B> ";
 
echo $row [ "texto" ];
 
echo "<br />";
 
}
 
mysql_close($con);
 
?>