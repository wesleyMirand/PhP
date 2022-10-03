<html>
<head>
     <title>Teste Exercicio</title>
</head>
<body>
<form action='exercito.php' method='get'>
 Digite o nome:             <input type='text' name='nome' ><br>
 Digite a idade:            <input type='text' name='idade'><br>
 Digito o sexo 'M' ou 'F':  <input type='text' name='sexo' ><br>
 <input type="submit">
</form>

<?php

$nome  = $_GET['nome' ];
$idade = $_GET['idade'];
$sexo  = $_GET['sexo' ];

switch ($sexo) {
  case 'F':
      echo "Nome:  $nome  <br>
            Idade: $idade <br>
            Sexo:  $sexo  <br>";
      echo "Serviço não obrigatório";
    break;
  case 'M':
    if ($idade >= 18) {
      echo "Nome: $nome  <br>
           Idade: $idade <br>
            Sexo: $sexo  <br>;"
      echo "Serviço obrigatório";
      } else {
        echo "Nome: $nome  <br>
             Idade: $idade <br>
              Sexo: $sexo  <br>;"
        echo "Serviço não obrigatório";  
      }
      break;
}
?>
</body>
</html>
