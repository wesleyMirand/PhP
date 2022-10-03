<?php 

$x = 1;
$multiplicador = 1;
$resultado = null;

while ($multiplicador <= 10) {
     echo "Tabuada do $multiplicador<br>";
          while ($x <= 10) {
              $resultado = $x * $multiplicador;
              echo "$x x $multiplicador = $resultado<br>";
              $x++;
          }
     $x = 1;
     $multiplicador++;
}

?>
