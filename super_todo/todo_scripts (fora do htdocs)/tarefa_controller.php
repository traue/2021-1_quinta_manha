<?php

    require "../../todo_scripts/conexao.php";
    require "../../todo_scripts/tarefa_model.php";
    require "../../todo_scripts/tarefa_service.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'listarTarefasPendentes') {
        $tarefa = new Tarefa();
        $conn = new Conexao();

        $tarefa->__set('id_status', 1);

        $tarefaService = new TarefaService($conn, $tarefa);
        $tarefas = $tarefaService->listarTarefasPendentes();
    }
?>