<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <body>
        <form name="holamundo" action="insertar_datos.php" method="post">
        <table id="myTable" name="TABLA" class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'consulta.php';?>
                <tr>
                </tr>
            </tbody>
        </table>
        <button type="enviar" name="add" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Cambios</button>
        <button class="btn btn-danger" namme="delete"><span class="glyphicon glyphicon-minus"></span> Eliminar Filas Seleccionadas</button>
        </form>
        <button class="btn btn-success" onclick="insertar()"><span class="glyphicon glyphicon-plus"></span> Insertar Nuevo Elemento</button>
    </body>
    <script>
        function insertar(){
            var table = document.getElementById('myTable');
            var row = table.insertRow(table.rows.length);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(2);
            cell1.innerHTML = '<td><input type="text" name="selectedNA[]"><br></td>';
            cell2.innerHTML = '<td><input name="selectedApe[]"></input><br></td>';
            cell3.innerHTML = '<td><input name="selectedId[]" type="hidden"></input><br></td>';
            cell4.innerHTML = '<td><input name="selectedCheck[]" type="checkbox"></input><br></td>';
        }
    </script>
</html>