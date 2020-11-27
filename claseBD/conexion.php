<?php //etiqueda php
    class Bd{
        private static $conexion=NULL;
        private function __construct(){} //precargar informacion para el uso de la conexion

        public static function conectar(){
            $pdo_option[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION; //cachar excepcion
            self::$conexion = new PDO('mysql:host=localhost;dbname=bibliotecaa','root','',$pdo_option); //cadena de conexion con pdo
            return self::$conexion;
        }
    }
?>