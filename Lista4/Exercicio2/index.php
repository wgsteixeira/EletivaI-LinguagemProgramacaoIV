<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lista de Exericicios 04</title>
</head>


<body class="container mt-3">
  <h1>Exercicio 02</h1>  

  <form action="resultado.php" method="POST">
    <div class="col-6 container border mt-5">
      <h3>Verificar Lote de Cheques</h3>
      <div class="row container mt-3">
        <div class="col-6">
          <label for="soma_lote" class="label-control">Soma do Lote</label>
          <input type="float" name="soma_lote" id="soma_lote" class="form-control">
        </div>
        <div class="col-6">
          <label for="qtde_cheques" class="label-control">Quantidade Cheques</label>
          <input type="number" name="qtde_cheques" id="qtde_cheques" class="form-control">
        </div>
        <div class="row mt-3">
          <div class="col-3 mb-3">
            <button type="submit" class="col btn btn-danger" name="verificar">Verificar</button>
          </div>          
        </div>
      </div>
  </form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>