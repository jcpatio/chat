<?php
 
$usuario=$_POST["usuario"];
 
$texto=$_POST["texto"];
 
$con = mysql_connect("localhost","root","speedtouch");
 
mysql_select_db("chat");
 
if (!$con)    {
 
die('Could not connect: ' . mysql_error());
 
}
 
$sql ="INSERT INTO chat (usuario, texto) VALUES ('".$usuario ."','".$texto."');";
 
mysql_query($sql,$con);
 
mysql_close($con);
 
echo '<meta http-equiv="REFRESH" content="0;url=index.php">';
 
?>