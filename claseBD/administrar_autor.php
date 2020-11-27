<?php
require_once('crud_autor.php');
require_once('autor.php'); 

$crudAutor = new CrudAutor();
$autor = new Autor();

if (isset($_POST['insertar'])) {
    $autor->setNombre($_POST['nombre']);
    $autor->setPais($_POST['pais']);
    $autor->setNacimiento($_POST['nacimiento']);
    
    $crudAutor->insertar($autor);
    header('Location: index.php');
}
?>