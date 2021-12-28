<?php
    $serverName = "DESKTOP-121TBAH\SERVERSQL2019"; //serverName\instanceName

    // Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
    // La conexión se intentará utilizando la autenticación Windows.
    $connectionInfo = array( "Database"=>"DB_PROYECTOV");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

?>

 