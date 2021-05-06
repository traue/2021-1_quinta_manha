<?php

    class TarefaService {

        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa) {
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }

        public function listarTarefasPendentes() {
            $query = 'SELECT
                t.id,
                t.tarefa,
                s.status
            FROM
                tb_tarefas AS t
                LEFT JOIN tb_status AS s ON(t.id_status = s.id)
            WHERE t.id_status = :id_status';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>