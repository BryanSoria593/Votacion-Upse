<?php
    $serverName = "DESKTOP-121TBAH\SERVERSQL2019"; //serverName\instanceName

    // Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
    // La conexión se intentará utilizando la autenticación Windows.
    $connectionInfo = array( "Database"=>"DB_PROYECTOV");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

?>
    <!-- $server ="DESKTOP-121TBAH\SERVERSQL2019";
    $user ="sa";
    $contrasena="Soria593";
    $db="DB_PROYECTOV";
    $conexion = new PDO("sqlsrv:server=$server;database=$db",$user,$contrasena);
    // $consulta =$conexion->prepare("SELECT * FROM ADMINISTRADOR");
    // $consulta->execute();
    // $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($datos); -->
 