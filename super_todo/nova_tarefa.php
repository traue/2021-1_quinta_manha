<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super ToDo - Nova Tarefa</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" rel="stylesheet">
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

    <?php if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1) : ?>
        <div class="bg-info pt-2 text-white d-flex justify-content-center">
            <h5>Tarefa inserida com sucesso!</h5>
        </div>
    <? endif ?>

    <!-- menu lateral -->
    <div class="container app">
        <div class="row">
            <div class="col-md-3 menu">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="./">Tarefas pendentes</a></li>
                    <li class="list-group-item active"><a href="nova_tarefa.php">Nova tarefa</a></li>
                    <li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
                </ul>
            </div>

            <div class="col-md-9">
                <div class="container pagina">
                    <div class="row">
                        <div class="col">
                            <h4>Nova tarefa</h4>
                            <hr>
                            <form method="POST" action="tarefa_controller.php?acao=inserir">
                                <label class="mt-3">Digite a nova tarefa:</label>
                                <div class="input-group mb-3 mt-3">
                                    <input autofocus type="text" name="tarefa" class="form-control" placeholder="Ex: Lavar o carro">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success">Inserir Tarefa</button>
                                    </div>
                                </div>                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>





