<?php 
session_start();
session_unset();
session_destroy();
?>
<html>
<head>
<style>.espacio9{  color:white; text-align: center;   width: 29%;
  height: 72%;margin: 0 auto;background: hsl(90, 50%, 11%);   border-color: orange;
  border-width: 8px;
  border-style: double;
 } body{background-image: 
 url("https://www.xiaomiadictos.com/wp-content/uploads/2020/10/collage-xiaomi-galeria-miui-aplicaciones-2.jpg");}</style>
<title>Sesion</title></head>
<body><div class= "espacio9">
    <br><?php 
echo "<h2>Sesión cerrada.</h2>";
?><br><br><button><a href="index.php">Volver al inicio</a></button>
</div>
</body>
</html>