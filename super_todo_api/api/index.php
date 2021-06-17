<?php
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Origin: *');

	if(isset($_GET['tarefastatus']) && ($_GET['tarefastatus'] == 1)) {
		$acao = 'listarTarefasPendentes';
	}else {
		$acao = 'listarTarefas';
	}

    require __DIR__.'../../tarefa_controller.php';

	echo json_encode($tarefas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE |
		JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);

?>
