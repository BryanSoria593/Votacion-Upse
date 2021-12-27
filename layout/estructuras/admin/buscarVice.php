<?php
    require ('../../../conexion/conexion.php');
   
        if (isset($_POST["btn-Buscar"])) {
            $str = $_POST["cedulaVice"];
            $sth = ("SELECT * FROM USUARIOS WHERE USU_Cedula = '$str'");
            $resultado = sqlsrv_query($conn, $sth);
            while($row=sqlsrv_fetch_array($resultado)){
            ?>
                <tr>
                    <td data-label="Nombres"><?=$row['NOMBRES']?></td>
                    <td data-label="Apellidos"><?=$row['APELLIDOS']?></td>
                    <td data-label="Cedula"><?=$row['USU_Cedula']?></td>
                    <td data-label="Correo"><?=$row['CORREO']?></td>
                    <td data-label="Cargo"><?=$row['ID_ROL']?></td>
                    <td data-label="Facultad"><?=$row['CORREO']?></td>
                </tr>

            <?php
            }
        }

    
?>