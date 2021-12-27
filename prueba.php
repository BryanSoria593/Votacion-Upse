<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php
    require ('conexion/conexion.php');


if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = ("SELECT * FROM USUARIOS WHERE USU_Cedula = '$str'");

	$resultado = sqlsrv_query($conn, $sth);

	while($row=sqlsrv_fetch_array($resultado)){
        echo '<tr>';
        echo '<td>'.$row['USU_Cedula'].'</td>';
        echo '<td>'.$row['NOMBRES'].'</td>';
        echo '</tr>';           
    }
    

}

?>

