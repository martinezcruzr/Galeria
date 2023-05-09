<html>

<head><style>.espacio8{padding:0.2px; width: 20%;
  height: 100%; text-align: center; color:white; background: hsl(90, 50%, 11%);}img{margin:1px;width:30%} .espacio1{ display:flex; flex-direction: row; width:80%; float:right; flex-wrap:wrap;}
@media screen and (max-width: 800px) {.espacio8{width: 30%;}.espacio1{ display:flex; flex-direction: column; width:70%; float:right;}img{margin:1px;width:98%}}
</style>
<title>Galerías</title></head>
<body>

<div class= "espacio1"><?php foreach (glob("archivos/*.jpg") as $filename) { 
    echo "<img src='$filename' height='300px'
  width='300px';><br> "; 
}?></div><div class= "espacio8">
<?php 
error_reporting(0);
move_uploaded_file($_FILES['archivo']['tmp_name'],'archivos/'.$_FILES['archivo']['name']);
$abrirdir= scandir("archivos");
$nombre=$_POST['nombre'];
$_SESSION['nombre'] = $nombre;
echo "<h2>Hola $_SESSION[nombre] .</h2>"."<h3>Tus imágenes son:</h3>";
$long=count($abrirdir);
for($indice = 0; $indice < $long; $indice++){if( ! is_dir ($abrirdir[$indice]) & $abrirdir[$indice]!= "borrar.php")
{echo $abrirdir[$indice] . "<br>";}}

echo "<br><br><br><br>" 
?>
      <form method="POST" action="archivos/borrar.php">
	     <h3> Eliminar imagen :</h3> <input type="text" value= "Nombre de la imagen a eliminar" name="borrar">
		  <br><br><input type="submit" value="Eliminar">
	  </form>
	  
	  <br><br><br><br><button><a href='formulariob.php'>Subir otra imagen</a></button>
	  <br><br><button><a href='close.php'>Cerrar sesión</a></button></div>
</body>
</html>
