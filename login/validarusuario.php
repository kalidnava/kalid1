<?php
//include("../login/validar.php"); 
//$usuario=$_POST['usuario'];
//$contraseña=$_POST['contraseña'];

//$consulta="SELECT * FROM tblusuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";


//$stmt = sqlsrv_query ($con,$consulta);
//if($stmt){
//	header('location:index.htlm');
//}else{
//	echo "error";

include 'validar.php';
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

if(empty($usuario) || empty($contraseña)){
	header("location:../index.html");
}

$sql="SELECT * FROM tblusuarios WHERE usuario='" . $usuario . "'";
$stmt=sqlsrv_query($con, $sql);
if($stmt=== false){
	die(print_r(sql_errors(),true ));
}

if($sql==false){
	echo "verifique sus datos";
}else{

	header("location:../index.html");
}
?>

