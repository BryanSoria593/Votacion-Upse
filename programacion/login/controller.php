<?php 
    require_once 'loginR.php';
    $model = new Model();


    $model -> usuario = $_POST['txtUsuario'];
    $model -> clave =$_POST['txtContra'];
    $filaReceptada = $model -> logear();

    if ($filaReceptada>1) {
        echo("asdj");
        header('Location: ../../layout/Administrador/admin.php');
        
    }else{
        echo"<h1>Sorry</h1>";
        
    } 

?>


