<html>
<head>
     <title> Meses</title>
</head>
<body>
<form action= "meses.php" method= "get">
    Digite o número do mês: <input type="text" name= "mes">
    <input type= "submit">
</form>

<?php

$mes = $_GET['mes'];
$listaMeses = array( 1 => 'Janeiro',
                     2 => 'Fevereiro',
                     3 => 'Março',
                     4 => 'Abril',
                     5 => 'Maio',
                     6 => 'Junho',
                     7 => 'Julho',
                     8 => 'Agosto',
                     9 => 'Setembro',
                    10 => 'Outubro',
                    11 => 'Novembro',
                    12 => 'Dezembro',
);

print isset ($listaMeses[$mes])
     ? "Mês digitado: $listaMeses[$mes]" : "Mês não previsto no programa";
?>
</body>
</html>
