<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Clients</title>
</head>
<body class="container" style="background-color: #EFEFEF">
    <?php if(!empty($returnMessage)): ?>
        <div class="alert alert-dark alert-dismissible fade show w-75 mt-3 text-center justify-content-center">
            <p><?= $returnMessage ?></p>
            <button class="btn-close" onclick="reload()">
            </button>
        </div>
    <?php endif; ?>
    <div class="mt-3 mb-3 d-flex justify-content-between">
    <h3>Listagem de Clientes</h3>
    <a href="./index.php?a=goToNew" class="btn btn-outline-primary">Novo Cliente</a>
</div>
<table class="table table-striped mt-4">
    <thead class="table-dark text-center">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>EMAIL</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php foreach($resultData as $data): ?>
            <tr>
                <td> <?= $data['id']; ?> </td>
                <td> <?= $data['name']; ?> </td>
                <td> <?= $data['email']; ?> </td>
                <td> <?= $data['phone']; ?> </td>
                <td> 
                    <a class="btn btn-outline-warning btn-sm" href="./index.php?a=search&v=editCreate&search=<?= $data['id'] ?>">Editar</a>
                    <a class="btn btn-outline-danger btn-sm" onclick="verifyDelete(<?= $data['id'] ?>)">Deletar</a> 
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
<script>
    function verifyDelete(id)
    {
        let result = confirm('Você tem certeza que deseja deletar o registro com id: '+id);
        console.log(result);
        if(result)
        {
            window.location.replace('./index.php?a=delete&id='+id);
        }
    }
    function reload()
    {
        window.location.replace('index.php');
    }
</script>
</html>