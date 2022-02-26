<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body class="container">
  <h1>Cálculos</h1>

  <?php

    $variavel_valor1 = $_POST["valor1"];
    $variavel_valor2 = $_POST["valor2"];
    echo "Os valores recebidos foram: $variavel_valor1 e $variavel_valor2";
    echo "<br>";
    echo "A soma dos valores é: ",$variavel_valor1 + $variavel_valor2;
    echo "<br>";
    echo "A subtração dos valores é: ",$variavel_valor1 - $variavel_valor2;
    echo "<br>";
    printf("A divisão dos valores é: %.3f",$variavel_valor1 / $variavel_valor2);
    echo "<br>";
    echo !($variavel_valor1 % 2) ? "O valor 1 é par" : "O valor 1 é ímpar";
    echo "<br>";
    echo !($variavel_valor2 % 2) ? "O valor 2 é par" : "O valor 2 é ímpar";   

  ?>

  

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>