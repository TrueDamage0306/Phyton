<?php 
include "../config.php";

$cedula1=$_POST["cedula"];
$nombre1 = $_POST["nombre_apellido"];
$usuario1 = $_POST["usuario"];
$clave1 = $_POST["clave"];
$telefono1 = $_POST["telefono"];
$email1= $_POST["email"];
$on_line1= "off-line";
$perfil1= "Usuario";


try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT username FROM usuarios WHERE cedula='$cedula1'");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
    $registros = count($result);

    if($registros==1){

        echo "1";
    } else {
        //echo json_encode(['error'=>'no hay']); 
        $sql = "INSERT INTO usuarios (cedula,nombre_apellido,telefono,email,username,password,on_line,perfil) 
        values('$cedula1','$nombre1','$telefono1','$email1','$usuario1','$clave1','$on_line1','$perfil1')";
        $conn->exec($sql);
        echo "2";
    } 
    //echo $TRegistros; //sale bien

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  $conn = null;
 

?>