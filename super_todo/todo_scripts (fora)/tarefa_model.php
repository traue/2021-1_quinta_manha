<?php

    class Tarefa {
        private $id;
        private $data_cadastro;
        private $tarefa;
        private $id_status;

        public function __get($atr) {
            return $this->$atr;
        }

        public function __set($atr, $value) {
            $this->$atr = $value;
        }
    }
?>