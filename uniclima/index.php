<?php
    require "../../scripts_uniclima/weather_api.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>UniClima</title>
    <style>
        .tempo-card {
            padding: 100px 0 0 0;
            width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">Clima</a>
            <form class="d-flex" method="post">
                <input type="search" class="form-control me-2" name="cidade" value="<?= $cidade ?>" placeholder="Digite a cidade">
                <button class="btn btn-outline-info" type="submit">Buscar</button>
            </form>
        </div>
    </nav> 

    <div class="container mt-4">
        <div class="row">
            <div class="tempo-card">
                <div class="card">
                    <div class="card-body">
                        <? if($clima != null) : ?>
                            <div class="text-center">
                                <img src="http://openweathermap.org/img/wn/<?=$clima->__get("icon")?>@2x.png">
                                <h4>Cidade: <?= ucwords($cidade) ?></h4>
                            </div>
                            <div class="mt-4">
                                <p><strong>Agora: </strong><?= ucwords($clima->__get("desc"))?></p>
                                <p><strong>Temperatura: </strong><?= $clima->__get("temp")?> ºC</p>
                                <p><strong>Min.: </strong><?= $clima->__get("temp_min")?> ºC</p>
                                <p><strong>Máx: </strong><?= $clima->__get("temp_max")?> ºC</p>
                                <p><strong>Umidade relativa do ar: </strong><?= $clima->__get("humidity")?>%</p>
                                <p><strong>Sensação térmica: </strong><?= $clima->__get("feels_like")?> ºC</p>
                            </div>
                        <? else: ?>
                            <div class="text-center">
                                <h4><?= $cidade == "" ? "Digite uma cidade" : "Cidade não encontrada" ?> </h4>
                            </div> 
                        <? endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>