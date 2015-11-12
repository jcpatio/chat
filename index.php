<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<script type="text/javascript">
 
function refresca(){
 
var conexion;
 
if (window. XMLHttpRequest){
 
conexion=new XMLHttpRequest();
 
}
 
else {
 
conexion= new ActiveXObject("Microsoft.XMLHttp");
 
}
 
conexion.open("GET", "recibe.php",true);
 
conexion.send();
 
conexion.onreadystatechange=function(){
 
if (conexion.readyState==4 && conexion.status==200) {
 
document.getElementById("myDiv").innerHTML=conexion.responseText;
 
}
 
setTimeout('refresca()',10000);
 
};
 
}
 
window.onload = function inicia(){
 
setTimeout('refresca()',1000);
 
}
 
</script>
<style>
#myDiv {
width: 300px;
height:500px;
border:1px solid black;
overflow:hidden;
}
</style>
 
</head>
 
<body>
 
<form action="enviar.php" method="POST">
  <div align="center"><br />
  <table width="200" border="0">
    <tr>
      <td width="68">Usuario:</td>
      <td width="116"><input type="text" id="usuario" name="usuario" /></td>
      </tr>
    <tr>
      <td>Mensaje</td>
      <td><input type="text" id="texto" name="texto" /></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" value="enviar" /></td>
      </tr>
  </table>
</div>
</form><table width="200" border="0" align="center">
  <tr>
    <td><div id="myDiv">
</div></td>
  </tr>
</table>


</body>
</html>
