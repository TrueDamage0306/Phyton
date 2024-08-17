<?php
include "config.php";

 ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Python</title>



    <link rel="shortcut icon" href="assets/img/logos.jpg" type="image/x-icon">

    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/auth.css">
    <link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.css">
    <link rel="stylesheet" href="./assets/compiled/css/estilo.css">
</head>

<body>

    <div id="auth">

        <div class="row h-100 bg-primary-subtle">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="">
                        <!--   <a href="index.html"><img src="./assets/compiled/png/logo2.png" alt="Logo" width=""></a>-->
                    </div>
                    <h1>Tutorial Python</h1>
                    <p class="auth-subtitle mb-5"><b>Registrate Ahora</b></p>

                    <form action="" method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Cedula" name="cedula"
                                id="cedula" data-mask="V-00000000">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Nombre y Apellido"
                                name="nombre_apellido" id="nombre_apellido">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Telefono"
                                name="telefono" id="telefono" data-mask="(0000)-0000000">
                            <div class="form-control-icon">
                                <i class="bi bi-phone"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Email" name="email"
                                id="email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Usuario" name="usuario"
                                id="usuario">
                            <div class="form-control-icon">
                                <i class="bi bi-person-vcard"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Contraseña"
                                name="clave" id="clave">
                            <div class="form-control-icon">
                                <i class="bi bi-key"></i>
                            </div>
                        </div>

                        <button type="button" class="btn bg-c-blue btn-block btn-lg shadow-lg mt-5 text-dark"
                            id="registro" style="border-radius:20px">Registrate</button>

                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <!--  <p class="text-gray-600">Don't have an account? <a href="auth-register.html" class="font-bold">Sign
                        up</a>.</p>
                <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-7 bg-c-blue">
                <div class="row text-center justify-content-center align-items-center vh-100">
                    <div id="" class="" id="auth-right">
                        <img src="assets/img/superpy.webp" alt="Logo" width="50%">
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.mask.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="app/app.js"></script>
</body>
<script>

    
 

</script>
</body>

</html>