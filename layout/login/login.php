<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../styles/login1.css">
    <title>Document</title>
</head>

<body>

    <img class="banner-upse" src="../../img/bannerUpse.jpg" alt="Logotipo de Universidad Estatal Península de Santa Elena">
    <div class="login"> 
        <div class=' max-w-sm w-full rounded-lg mx-auto'>
            <div class=' mx-auto flex items-center px-2 py-3'>
                <div class="bibliotecaw-full max-w-xs">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="../../programacion/login/controller.php">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Usuario
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="username" type="text" name="txtUsuario" required  placeholder="Usuario">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Contraseña
                            </label>
                            <input
                                class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" type="password" name="txtContra" required  placeholder="******************">
                            
                        </div>
                        <div class="flex items-center justify-between">
                            <input class="login-in bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit" value="Iniciar sesión">
                            <a class="remember inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                                href="#">
                                ¿Olvidaste la contraseña?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>