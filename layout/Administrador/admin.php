    <!-- INICIO IMPORTANDO PÁGINA DEL HEADER-->
    <?php require('../estructuras/header.php') ?>
    <!-- FIN DE IMPORTANDO PÁGINA DEL HEADER-->
    <div class="container">
        <div class="container__opciones">
            <div class="container__msg">
                Opciones del sistema
            </div>
            <div class="registrar" id="registrar">
                <i class="fas fa-user-plus"></i>
                <p class="registrar__smg">Registrar lista</p>
            </div>
            <div class="editar" id ="editar">
                <i class="fas fa-user-edit"></i>
                <p class="editar__smg">Editar lista</p>
            </div>
        </div>
        <!-- INICIO DEL REGISTRO DE LA LISTA -->
        <div class="container__contenidoSeleccionado" id="registrar-contenido">
            <?php require('../estructuras/admin/adminRegistrar.php')?>
        </div>
        <!-- FIN DE LA PÁGINA DE REGISTRO -->
        <!-- INICIO DE LA PÁGINA DE EDITAR -->
        <div class="container__contenidoEditar" id="editar-registro" >
           <?php require('../estructuras/admin/adminEditar.php') ?>     

        </div>
        <!-- FIN DE LA PÁGINA DE EDITAR -->
    </div>
</body>
</html>