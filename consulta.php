<?php
    
    if (!$link = mysql_connect("localhost","root","jorgeles1258mago")) {
        echo 'No se pudo conectar a la base de datos';
        exit;
    }
    if (!mysql_select_db("CC",$link)) {
        echo 'No pudo seleccionar la base de datos';
        exit;
    }
    
    // Con esta sentencia SQL insertaremos los datos en la base de datos
    $i=mysql_query("SELECT * from Datos",$link);
    while($row = mysql_fetch_array($i)){
        $nombre=$row['Nombre'];
        $apellidos=$row['Apellidos'];
        $id=$row['ID'];
        echo '<tr>';
        echo "<td><input type=\"text\" name=\"selectedNA[]\" value=\"$nombre\"><br></td>";
        echo "<td><input type=\"text\" name=\"selectedApe[]\" value=\"$apellidos\"><br></td>";
        echo "<td><input type=\"checkbox\" name=\"selectedCheck[]\" value=\"$apellidos\"><br></td>";
        echo "<td><input type=\"hidden\" name=\"selectedId[]\" value=\"$id\"></td>";
        echo '</tr>';
    }
?>