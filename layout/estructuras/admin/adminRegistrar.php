<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
<h3 class="msg-registrar">Registrar postulantes</h3>
<div class="container__contenido">
    <div class="container__contenido-consulta" id="prueba">
        <p class="msg-rector">Búsqueda de candidatos</p>
        <div class="busqueda">
            <div class="busqueda__rector">
                <form action="" method="POST">
                    <label for="cedula-rector">Cédula de candidato a rector: </label>
                    <br>
                    <input type="text" name="cedulaRector" id="cedula-r" placeholder="Ingrese la cédula">
                    <input type="submit" value="Buscar" name="btn-BuscarR" href="javascript:;" 
                    onclick="buscar($('#cedula-r').val());">
                </form>
            </div>
            <br>
            <div class="busqueda__vice">
                <form action="" method="post">
                    <label for="cedula-rector">Cédula de candidato a Vicerector: </label>
                    <br>
                    <input type="text" name="cedulaVice" id="cedula-v" placeholder="Ingrese la cédula">
                    <input type="submit" value="Buscar" name="btn-Buscar">
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="container__contenido-respuesta">
        <div class="container__rector">
            <p>Datos del candidato a rector</p>
            <table class="table">
                <thead>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Cédula</th>
                    <th>Correo</th>
                    <th>Cargo</th>
                    <th>Facultad</th>
                </thead>
                <tbody class="formR">
                    <?php require_once('buscarRec.php')?>
                </tbody>
            </table>
        </div>
        <div class="container__vice">
            <p>Datos del candidato a Vicerector</p>
            <table class="table">
                <thead>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Cédula</th>
                    <th>Correo</th>
                    <th>Cargo</th>
                    <th>Facultad</th>
                </thead>
                <tbody id="form_vice">
                    <?php require('buscarVice.php')?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container__contenido-registrar">
    <div class="registrar__lista">
        <h2>Registrar lista e imágenes</h2>
        <form class="form-registrar" action="">
            <section class="campo-lista">
                Selecciona la lista <select >
                    <option  disabled="" >Seleccione una opción</option>
                    <option value="">A</option>
                    <option value="">B</option>
                    <option value="">C</option>
                    <option value="">D</option>
                    <option value="">E</option>
                    <option value="">F</option>
                </select>
                <br>
                <!-- <label for="numero-lista">Número de la lista</label>
                <hr>
                <input type="text" name="cedula-vice" id="cedula-v" placeholder="Ingrese el número" size="20"> -->
            </section>
            <section class="campo-rector">
                <label for="imagen-rector">Ingrese la imágen del rector</label>
                <hr>
                <input type="file" name="img-rector" id="img-rector" accept=".jpg, .png, .jpeg">
                <div id="preview"></div>
            </section>
            <section class="campo-vice">
                <label for="imagen-vicerector">Ingrese la imágen del Vicerector</label>
                <hr>
                <input type="file" name="img-vice" id="img-vice" accept=".jpg, .png, .jpeg">
                <div id="preview1"></div>
            </section>
        </form>
        <input class="enviar" type="submit" value="Guardar datos">
    </div>
</div>

    
</body>
</html>