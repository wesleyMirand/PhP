<html>
<head>
     <title> Média de 4 notas </title>
</head>
<body>
<form action = 'media.php' method = 'get'>
      Nota 1: <input type = "text" name = "nota1"><br>
      Nota 2: <input type = "text" name = "nota2"><br>
      Nota 3: <input type = "text" name = "nota3"><br>
      Nota 4: <input type = "text" name = "nota4"><br>
      <input type="submit">
</form>

<?php
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$nota4 = $_GET['nota4'];

$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

echo "Média: $media";

?>

</body>
</html>
