<?php 
session_start();
?>
<html>
<head>
<style>.espacio9{  color:white; text-align: center;   width: 29%;
  height: 72%;margin: 0 auto;background: hsl(90, 50%, 11%);   border-color: orange;
  border-width: 8px;
  border-style: double;
 } body{background-image: 
 url("https://www.xiaomiadictos.com/wp-content/uploads/2020/10/collage-xiaomi-galeria-miui-aplicaciones-2.jpg");}</style>
<title></title></head>
<body><div class= "espacio9">
  <br>  
<?php 
$archivo = $_POST["borrar"];
if(file_exists($archivo)){
	
if(unlink($archivo)){
	echo "Archivo ($archivo) eliminado.";
}else{echo "Archivo no se pudo eliminar. ";}}

	else{echo "No se encontró el archivo ($archivo).";}
?>
<br><br>
	<a href="../subir2.php"><button>Regresar</button></a>
	<a href="../close.php"><button>Cerrar sesión</button></a>
</div>
</body>
</html>