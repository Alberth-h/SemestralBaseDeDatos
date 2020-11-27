<?php
//incluir las clases libro y crudlibro

require_once('crud_libro.php'); //obtener clase curdlibro
require_once('libro.php'); //obtener clase libro

$crudLibro = new CrudLibro();
$libro = new Libro();

// si el elemento a insertar no viene nulo, llama al crud a insertar un libro

if (isset($_POST['insertar'])) {
    $libro->setNombre($_POST['nombre']);
    $libro->setAutor($_POST['autor']);
    $libro->setEdicion($_POST['edicion']);
    //Llama a la funcion insertar definida en el CRUD si todo se obtuvo correctamente
    $crudLibro->insertar($libro);
    header('Location: index.php');
}
?>