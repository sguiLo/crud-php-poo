<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/css/index.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Clients</title>
</head>
<body class= "container">
    <a class="button btn-back" href="index.php">Back</a>
    <div class="justify-content-center row mt-3">
    <div class="col-5">
    <h1 class="text-center">Edição de Cliente</h1>
    <div class="form-outline mb-2">
        <form action="index.php" method="POST" class="rounded shadow p-3 bg-dark">
            <div class="input-box">
                <label for="name" class="text-white">Nome Completo:</label>
                <input class="input form-control" type="text" placeholder="Nome completo do cliente" value="<?= isset($resultData[0]['name']) ? $resultData[0]['name'] : '' ?>" name="name" required>
            </div>
            <br>
            <div class="input-box">
                <label for="email" class="text-white">Email:</label>
                <input class="input form-control" type="email" placeholder="E-mail do cliente" value="<?= isset($resultData[0]['email']) ? $resultData[0]['email'] : '' ?>" name="email" required>
            </div>
            <br>
            <div class="input-box">
                <label for="phone" class="text-white">Telefone:</label>
                <input class="input form-control" type="number" placeholder="Telefone do cliente" value="<?= isset($resultData[0]['phone']) ? $resultData[0]['phone'] : '' ?>" name="phone" required>
            </div>
            <br>
            <input type="hidden" name="a" value="<?= isset($resultData[0]['id']) ? 'edit' : 'new' ?>">
            <input type="hidden" name="id" value="<?= isset($resultData[0]['id']) ? $resultData[0]['id'] : '' ?>">
            <input class="btn btn-outline-light d-block w-100" type="submit" name="submit" value="Enviar">
        </form>
    </div>
    </div>
    </div>
</body>
</html>