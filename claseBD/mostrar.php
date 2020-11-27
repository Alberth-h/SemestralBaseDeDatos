<?php
require_once('crud_libro.php');
require_once('libro.php');
require_once('crud_autor.php');
require_once('autor.php');
$crudLibro=new CrudLibro();
$libro= new Libro();
$crudAutor=new CrudAutor();
$autor= new Autor();
//obtiene todos los libros con el método mostrar de la clase crud
$listaLibros=$crudLibro->mostrar();
$listaAutores=$crudAutor->mostrar();
?>
<html>
<head>
	<title>Mostrar Libros y Autores</title>
</head>
<body background="https://i.pinimg.com/originals/c9/16/69/c916691956bd94e799f3e40cdb2220f2.gif">
	<table border=1>
		<head>
			<td><font color="white">Nombre</font></td>
			<td><font color="white">Autor</font></td>
			<td><font color="white">Edicion</font></td>
		</head>
		<body>
			<?php foreach ($listaLibros as $libro) {?>
			<tr>
				<td><font color="white"><?php echo $libro->getNombre() ?></font></td>
				<td><font color="white"><?php echo $libro->getAutor() ?></font></td>
				<td><font color="white"><?php echo $libro->getEdicion() ?></font></td>
			</tr>
			<?php }?>
		</body>
	</table>

    <table border=1>
		<head>
        <td><font color="white">Nombre</font></td>
			<td><font color="white">Nacionalidad</font></td>
			<td><font color="white">Fecha de nacimiento</font></td>
		</head>
		<body>
            <?php foreach ($listaAutores as $autor) {?>
			<tr>
                <td><font color="white"><?php echo $autor->getNombre() ?></font></td>
				<td><font color="white"><?php echo $autor->getPais() ?></font></td>
				<td><font color="white"><?php echo $autor->getNacimiento()?></font></td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php"><font color="white">Volver</font></a>
</body>
</html>