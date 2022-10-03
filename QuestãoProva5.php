<html>
     <head> 
          <title>Curso PhP</title>
     </head>
     <body>
     <form action="teste123.php" method="get">
     
     Digite o número do mês: <input type= "text" name="mes"><br>
     <input type="subtmit">
     </form>
     
     <?php
     $mes = $_GET['mes'];
     $listaMeses = array (
                          1 => "Janeiro",
                          2 => "Fevereiro",
                          3 => "Março",
                          4 => "Abril",
                          5 => "Maio",
                          6 => "Junho",
                          7 => "Julho",
                          8 => "Agosto",
                          9 => "Setembro",
                          10 => "Outubro",
                          11 => "Novembro",
                          12 => "Dezembro",
);

//uso de operador ternario
print isset($listaMeses[$mes])
     ? "Mês digitado: $listaMeses[$mes]" : "Mês não previsto no programa";
     ?>
     
     </body>
</html>
   
