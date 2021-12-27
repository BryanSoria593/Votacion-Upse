<?php 


class model{
    var $id;
    var $usuario;
    var $clave;

    function __construct(){   
    }
    function logear(){
        $cadenaConexion = ("sqlsrv:server=DESKTOP-121TBAH\SERVERSQL2019;database=DB_PROYECTOV");
        $user="sa";
        $pass="Soria593";
        $cnx = new PDO($cadenaConexion,$user,$pass);
        
        try {
            $consulta = $cnx -> prepare ("SELECT * FROM ADMINISTRADOR WHERE USUARIO=:parametro1 AND CLAVE=(SELECT dbo.fun_encriptar(:parametro2))");
            $consulta -> bindValue(":parametro1",$this->usuario); 
            $consulta -> bindValue(":parametro2",$this->clave);
            $consulta -> execute();
            $filaEnviada = $consulta->fetch();
        
            return $filaEnviada;
         
        } catch (PDOException $e) {
            echo "Error en la conexión". $e;
        }
    }
}


if(!empty($_SERVER['HTTP_X_REQUESTED_WIDTH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    
    

}


?>