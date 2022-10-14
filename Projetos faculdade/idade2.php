<?php

$idade = 20;

if ($idade >= 18) {
  echo "maior de idade";
}else { 
  echo"menor de idade"; 
}

print '<br>';

if ($idade >= 60) {
  print "é um idoso";
} else if ( $idade >= 18 ) {
  print "é um adulto";
}
else if ($idade >= 12) {
  print "é um adolescente";
} else {
  print "é uma criança";
}

?>
