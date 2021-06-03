<?php

    class Clima {
        private $temp;
        private $tem_min;
        private $temp_max;
        private $fells_like;
        private $desc;
        private $icon;
        private $humidity;

        public function __get($atr) {
            return $this->$atr;
        }

        public function __set($atr, $value) {
            $this->$atr = $value;
        }
    }

?>