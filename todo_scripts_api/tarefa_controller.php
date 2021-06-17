<?php

    require __DIR__."../../todo_scripts_api/conexao.php";
    require __DIR__."../../todo_scripts_api/tarefa_model.php";
    require __DIR__."../../todo_scripts_api/tarefa_service.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    $tarefa = new Tarefa();
    $conn = new Conexao();
    $tarefaService = new TarefaService($conn, $tarefa);

    if($acao == 'listarTarefasPendentes') {
        $tarefa->__set('id_status', 1);
        $tarefas = $tarefaService->listarTarefasPendentes();
    }

    if($acao == 'listarTarefas') {
        $tarefas = $tarefaService->listarTodasTarefas();
    }

    if($acao == 'inserir') {
        $tarefa->__set('tarefa', $_POST['tarefa']);
        $tarefaService->inserir();
        header('Location: nova_tarefa.php?inclusao=1');
    }

    if($acao == 'remover') {
        $tarefa->__set('id', $_GET['id']);
        $tarefaService->remover();
        if(isset($_GET['pg'])  && $_GET['pg'] == 'index') {
            header('location: index.php');
        } else {
            header('location: todas_tarefas.php');
        }
    }

    if($acao == 'atualizar') {
        $tarefa->__set('id', $_POST['id']);
		$tarefa->__set('tarefa', $_POST['tarefa']);
        if($tarefaService->atualizar()) {
            if(isset($_GET['pg'])  && $_GET['pg'] == 'index') {
                header('location: index.php');
            } else {
                header('location: todas_tarefas.php');
            }
        }
    }

    if($acao == 'marcarRealizada') {
        $tarefa->__set('id', $_GET['id']);
        $tarefa->__set('id_status', 2);
        $tarefaService->marcarRealizada();
        if(isset($_GET['pg'])  && $_GET['pg'] == 'index') {
            header('location: index.php');
        } else {
            header('location: todas_tarefas.php');
        }
    }
?>