<html>
    <head>
    <title></title>
    </head>
    <body background="https://i.imgur.com/7IMfjSL.gif">
        <!--Libros-->
        <header><h1><font color="white">Ingresar los datos del libro</font></h1></header>
        <form action="administrar_libro.php" method="post">
            <table>
                <tr>
                    <td><font color="white">Nombre Libro</font></td>
                    <td><input type="text" name="nombre"></td>
                </tr>

                <tr>
                    <td><font color="white">Autor</font></td>
                    <td><input type="text" name="autor"></td>
                </tr>

                <tr>
                    <td><font color="white">Fecha de edicion</font></td>
                    <td><input type="text" name="edicion"></td>
                </tr>

                <input type="hidden" name="insertar" value="insertar">
            </table>

            <input type="submit" value="Guardar">
            <a href="index.php"><font color="white">Volver</font></a>
        </form>

        <!--Autores-->
        <header>><h1><font color="white">Ingresar los datos del Autor</font></h1></header>
        <form action="administrar_autor.php" method="post">
            <table>
                <tr>
                    <td><font color="white">Nombre completo del Autor</font></td>
                    <td><input type="text" name="nombre"></td>
                </tr>

                <tr>
                    <td><font color="white">Nacionalidad</font></td>
                    <td><input type="text" name="pais"></td>
                </tr>

                <tr>
                    <td><font color="white">Nacimiento</font></td>
                    <td><input type="text" name="nacimiento"></td>
                </tr>

                <input type="hidden" name="insertar" value="insertar">
            </table>

            <input type="submit" value="Guardar">
            <a href="index.php"><font color="white">Volver</font></a>
        </form>
    </body>
</html>