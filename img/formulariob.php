<?php 
 session_start();?>
<html>
<head><meta charset="utf-8">
<style>.espacio10{  padding:10px; color:white; text-align: center;   width: 29%;
  height: 72%;margin: 0 auto;background: hsl(90, 50%, 11%);   border-color: orange;
  border-width: 8px;
  border-style: double;
 } body{background-image: 
 url("https://www.xiaomiadictos.com/wp-content/uploads/2020/10/collage-xiaomi-galeria-miui-aplicaciones-2.jpg");}</style>
<meta charset="utf-8"><title>Subir imagen</title></head>
<body><div class= "espacio10">
      <form method="POST" action="subir2.php" enctype= "multipart/form-data">
	      Subir imagen: <input type="file" name="archivo" accept="image/png, image/jpeg">
		  <br><br><input type="submit" value="Enviar">
	  </form></div>
</body>
</html>