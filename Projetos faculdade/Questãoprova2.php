<html>
     <head>
           <title> Curso PhP </title>
     </head>
     <body>
     <form action = "teste123.php" method="get">
          Nota 1: <input type ="text" name= "num1"><br>
          Nota 2: <input type ="text" name= "num2"><br>
          Nota 3: <input type ="text" name= "num3"><br>
          Nota 4: <input type ="text" name= "num4"><br>
          <input type="submit">
     </form>
     
     <?php
     $num1 = $_GET['num1'];
     $num2 = $_GET['num2'];
     $num3 = $_GET['num3'];
     $num4 = $_GET['num4'];
     
     $media = ($num1 + $num2 + $num3 + $num4)/4;
     
     echo"Média: $media";
     
     ?>
     
     </body>
</html>
