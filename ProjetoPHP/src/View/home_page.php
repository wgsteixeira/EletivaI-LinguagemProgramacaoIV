<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Projeto PHP</title>
</head>

<body>
    <?php require_once "barra_navegacao.php"; ?>


    <div class="col container  mt-5 ">
        <div class="row container mt-3">
            <div class="row mt-3">
                <div class="col mb-3 col-2">
                    <button onclick="window.location.href = '/cliente/novo'" class="col btn btn-primary" name="iniciar">Inserir Cliente</button>
                </div>
                <div class="col mb-3 col-4">
                    <button onclick="window.location.href = '/produto/novo'" class="col btn btn-primary" name="iniciar">Inserir Produto</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>