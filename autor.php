<?php
    class Autor{
        private $id;
        private $nombre;
        private $pais;
        private $nacimiento;

        function __construct(){}

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }


        public function getPais(){
            return $this->pais;
        }

        public function setPais($pais){
            $this->pais = $pais;
        }


        public function getNacimiento(){
            return $this->nacimiento;
        }

        public function setNacimiento($nacimiento){
            $this->nacimiento = $nacimiento;
        }


        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }
    }
?>