<?php
 
    if(isset($_POST['add'])){
        for($i = 0; $i <= count($_POST["selectedNA"]); $i++) {
            if(isset($_POST["selectedNA"][$i]) && !empty($_POST["selectedNA"][$i]) &&
               isset($_POST["selectedApe"][$i]) && !empty($_POST["selectedApe"][$i])) {
                // Si entramos es que todo se ha realizado correctamente
                $link = mysql_connect("localhost","root","jorgeles1258mago");
                mysql_select_db("CC",$link);
            
                $result=mysql_query("SELECT ID from Datos where ID= '{$_POST['selectedId'][$i]}'",$link);
            
                if(mysql_num_rows($result) > 0){
                    // row exists. do whatever you would like to do.
                    mysql_query("update Datos set Nombre='{$_POST['selectedNA'][$i]}',Apellidos='{$_POST['selectedApe'][$i]}' where ID='{$_POST['selectedId'][$i]}'",$link);
                }
                else{
                    // Con esta sentencia SQL insertaremos los datos en la base de datos
                    mysql_query("INSERT INTO Datos (Nombre,Apellidos) VALUES ('{$_POST['selectedNA'][$i]}','{$_POST['selectedApe'][$i]}')",$link);
                }
            
                // Ahora comprobaremos que todo ha ido correctamente
                $my_error = mysql_error($link);
            
                if(!empty($my_error)) {
                
                    echo "Ha habido un error al comunicarse con la Base de Datos. $my_error";
                
                }
            
            }
        }
    }
    else{
        for($i = 0; $i <= count($_POST["selectedCheck"]); $i++) {
            if(isset($_POST['selectedCheck'][$i])){
                $link = mysql_connect("localhost","root","jorgeles1258mago");
                mysql_select_db("CC",$link);
                    
                $result=mysql_query("DELETE FROM Datos WHERE ID='{$_POST['selectedId'][$i]}'");
                    
                $my_error = mysql_error($link);
                    
                if(!empty($my_error)) {
                        
                    echo "Ha habido un error al comunicarse con la Base de Datos. $my_error";
                        
                }
            }
        }
    }
    include "formulario.php";
           
?>