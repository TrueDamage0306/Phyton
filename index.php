<?php
include "config.php";
 date_default_timezone_set("America/Caracas");
$fecha_y_hora = date("d-m-Y"); //echo $fecha_y_hora;
$hora = date("h:i:s:a"); //echo $hora;
$fechaSegundos = strtotime($fecha_y_hora);
$xmes = date("n", $fechaSegundos);

switch ($xmes) {
    case 1:
        $mes='Enero';
        break;
    case 2:
        $mes='Febrero';
        break;
    case 3:
        $mes='Marzo';
        break;
    case 4:
        $mes='Abril';
        break;
    case 5:
        $mes='Mayo';
        break;
    case 6:
        $mes='Junio';
        break;
    case 7:
        $mes='Julio';
        break;
    case 8:
        $mes='Agosto';
        break;
    case 9:
        $mes='Septiembre';
        break;
    case 10:
        $mes='Octubre';
        break;
    case 11:
        $mes='Noviembre';
        break;
    case 12:
        $mes='Diciembre';
        break;
}
//echo $mes;


// Encrypt cookie
function encryptCookie( $userid ) {
   
    $key = hex2bin(openssl_random_pseudo_bytes(4));

    $cipher = "aes-256-cbc";
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);

    $ciphertext = openssl_encrypt($userid, $cipher, $key, 0, $iv);
    

    return( base64_encode($ciphertext . '::' . $iv.'::'.$key) );
}

// Decrypt cookie
function decryptCookie( $ciphertext ) {
    
    $cipher = "aes-256-cbc";

    list($encrypted_data, $iv,$key) = explode('::', base64_decode($ciphertext));
    return openssl_decrypt($encrypted_data, $cipher, $key, 0, $iv);

}


// Check if $_SESSION or $_COOKIE already set
if( isset($_SESSION['userid']) ){
   header('Location: home.php');
   exit;
}else if( isset($_COOKIE['rememberme']  )){
    
    // Decrypt cookie variable value
    $userid = decryptCookie($_COOKIE['rememberme']);
        
    // Fetch records
    $stmt = $conn->prepare("SELECT count(*) as cntUser FROM usuarios WHERE id=:id");
    $stmt->bindValue(':id', (int)$userid, PDO::PARAM_INT);
    $stmt->execute(); 
    $count = $stmt->fetchColumn(); 

    if( $count > 0 ){
        $_SESSION['userid'] = $userid; 
        header('Location: entrada.php');
        exit;
    }
}

// On submit
if(isset($_POST['but_submit'])){

    $username = $_POST['txt_uname'];
    $password = $_POST['txt_pwd'];
    
    
    if ($username != "" && $password != ""){


        // Fetch records
        $stmt = $conn->prepare("SELECT count(*) as cntUser,id,nombre_apellido,cedula,username,password,telefono,email,on_line,perfil FROM usuarios WHERE username=:username and password=:password ");
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute(); 
        $record = $stmt->fetch(); 
    
        $count = $record['cntUser'];

        if($count > 0){
            $userid = $record['id'];
            $minombre = $record['nombre_apellido'];
            $micedula = $record['cedula'];
            $miuser= $record['username'];
            $mipassword= $record['password'];
            //$_SESSION['telefono'] = $mitelefono; 
            $miemail= $record['email'];
            $mion_line= $record['on_line'];
            $miperfil= $record['perfil'];
            $_SESSION['time'] = time();
            if( isset($_POST['rememberme']) ){

                // Set cookie variables
                $days = 30;
                $value = encryptCookie($userid);

                setcookie ("rememberme",$value,time()+ ($days *  24 * 60 * 60 * 1000));
                
            }else{
              if($miperfil=="Administrador"){
                $_SESSION['userid'] = $userid; 
                $_SESSION['nombre_apellido'] = $minombre; 
                $_SESSION['cedula'] = $micedula; 
                //$_SESSION['telefono'] = $mitelefono; 
                $_SESSION['username'] = $miuser; 
                $_SESSION['password'] = $mipassword; 
                $_SESSION['on_line'] = $mion_line; 
                $_SESSION['perfil'] = $miperfil; 

                $_SESSION['time'] = time();
                header('Location: Admin/index.php');
               // header('Location: admin.php');
              exit;
              }
            }

            if($miperfil=="Usuario"){
            
            $_SESSION['userid'] = $userid; 
            $_SESSION['nombre_apellido'] = $minombre; 
            $_SESSION['cedula'] = $micedula; 
            $_SESSION['username'] = $miuser; 
          //  $_SESSION['telefono'] = $mitelefono; 
            $_SESSION['email'] = $miemail; 
            $_SESSION['password'] = $mipassword; 
            $_SESSION['on_line'] = $mion_line; 
            $_SESSION['perfil'] = $miperfil; 

                $sql19 = "UPDATE usuarios SET on_line='on-line' WHERE username='$miuser'";
                $conn->exec($sql19);

                $sql9 = "INSERT INTO entradas (username,fecha,hora,mes) 
                values('$miuser','$fecha_y_hora','$hora','$mes')";
                $conn->exec($sql9);



            header('Location: entrada.php');
            exit;
            }
        }else{
          echo '<div id="incorrecto">1</div>';
       
          
        }

    }

}

       
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
    <script src="assets/static/js/initTheme.js"></script>
    <div id="auth">
        
<div class="row h-100 bg-primary-subtle">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="">
                <!--   <a href="index.html"><img src="./assets/compiled/png/logo2.png" alt="Logo" width=""></a>-->
            </div>
            <h1 >Tutorial Python</h1>
            <p class="auth-subtitle mb-5"><b>Inicie sesión con los datos que ingresó durante el registro.</b></p>

            <form action="" method="POST">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Nombre de Usuario" name="txt_uname" id="txt_uname">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Contraseña" name="txt_pwd" id="txt_pwd">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="">No estas Registrado Registrate <span><a href="registro.php">Aqui</a></span></label>
                </div>
                <button type="submit" class="btn bg-c-blue btn-block btn-lg shadow-lg mt-5 text-dark" name="but_submit" style="border-radius:20px">Entrar</button>
                
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

 
<script src="assets/js/sweetalert2.all.min.js"></script>
<script src="app/app.js"></script>
</body>
<script>

  a=document.getElementById("incorrecto").innerHTML="";
  if(a==""){
    Swal.fire({
    icon: 'error',
    title: 'Usuario o clave Incorrecta'
  
  })
 
  }else{
    document.getElementById("incorrecto").innerHTML="";
  }
  </script>
</body>

</html>