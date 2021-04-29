<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super ToDo</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
    <!-- navbar do site -->
    <nav class="navbar navbar-light navback">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="img/logo.png" width="30" height="30">
                Super ToDo
            </a>
        </div>
    </nav>

    <!-- menu lateral -->
    <div class="container app">
        <div class="row">
            <div class="col-md-3 menu">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item active"><a href="#">Tarefas pendentes</a></li>
                    <li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
                    <li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>