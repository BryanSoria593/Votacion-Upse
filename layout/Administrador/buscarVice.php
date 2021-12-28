<?php
    include ("../../conexion/conexion.php");
    $str = $_POST["buscarV"];
    $busqueda=sqlsrv_query($conn,"SELECT * FROM USUARIOS WHERE USU_Cedula = '$str'"); 
    $numero = sqlsrv_num_rows($busqueda); ?>

    <?php 
        while ($resultado = sqlsrv_fetch_array($busqueda)){ ?>
        <tr>
            <td data-label="Nombres"><?php echo $resultado['NOMBRES'];?></td>
            <td data-label="Apellidos"><?php echo $resultado['APELLIDOS']; ?></td>
            <td data-label="Cedula"><?php echo $resultado['USU_Cedula']; ?></td>
            <td data-label="Correo"><?php echo $resultado['CORREO']; ?></td>
            <td data-label="Cargo"><?php echo $resultado['ID_ROL']; ?></td>
            <td data-label="Facultad"><?php echo $resultado['ID_ROL']; ?></td>
        </tr>
        
<?php 
        }

?>