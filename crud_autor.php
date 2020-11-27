<?php
    //incluir la conexion a BD
    require_once('conexion.php');

    class CrudAutor{
        //Constructo de la clase
        public function __construct(){}

        //metodo para insertar, recibe como parametro un objeto de tipo autor
        public function insertar($autor){
            $db=Bd::conectar();
            $insert=$db->prepare('INSERT INTO autores values(NULL,:nombre, :pais, :nacimiento)');
            $insert->bindValue('nombre', $autor->getNombre());
            $insert->bindValue('pais', $autor->getPais());
            $insert->bindValue('nacimiento', $autor->getNacimiento());
            $insert->execute();
        }

        function mostrar(){
			$db=Bd::conectar();
			$listaAutores=[];
			$select=$db->query('SELECT * FROM autores');

			foreach($select->fetchAll() as $autor){
				$myAutor= new Autor();
				$myAutor->setId($autor['id']);
				$myAutor->setNombre($autor['nombre']);
				$myAutor->setPais($autor['pais']);
				$myAutor->setNacimiento($autor['nacimiento']);
				$listaAutores[]=$myAutor;
			}
			return $listaAutores;
		}
    }
?>