<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Sistema em PHP</title>
</head>

<body class="container">
  <h1>Sistema em PHP</h1>

  <?php

  if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    /*setcookie("usuario", $email, time() + (86400 * 1), "/");
    echo "Seja Bem-Vindo   " .$_COOKIE['usuario'];*/

    session_start();
    if (($email == "teste@fatec.sp.gov.br") && ($senha == "12345")) {
      $_SESSION['usuario'] = $email;
      $_SESSION['acesso'] = true;
      echo "Seja Bem-Vindo   " . $_SESSION['usuario'];?>
      <div class="row mt-3">
        <div class="col">
      <button class="btn btn-primary" onclick="window.location.href = 'index.php'">Sair</button>
    </div>
    </div>
      <?php    
               
    } else {
      header('Location: index.php');
      exit;
    }
  } else {
    session_start();
    if ($_SESSION['acesso'] == true){
      echo "Seja Bem-Vindo   " . $_SESSION['usuario'];
    } else {
      header('Location: index.php');
      exit;
    }
  }
    


  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>