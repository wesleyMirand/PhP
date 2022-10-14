<?php

$idade = 20;

if ($idade >= 18) {
   echo "maior de idade";
} else {
   echo "menor de idade";
}

print '<br>';

if ($idade >= 60) {
    print "é um idoso";
}else if ($idade >= 18) {
    print"é um adulto";
}
else if ($idade >= 12) {
     print "é um adolescente";
} else {
     print "é uma criança";
}

print '<br>';

$sexo = 'M';

if ($idade >= 18 and $sexo == 'M') {
    echo "serviço obrigatorio";
} else {
    echo "serviço opcional";
}

print "<br>";

if( $idade == 18) {
   echo "tem 18 anos";
} else {
   echo "não tem";
}
?>
   
