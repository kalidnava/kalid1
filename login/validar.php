<?php
$serverName = "DIANA\SQLEXPRESS";
$connectionInfo = array( "Database"=>"autopartes" , "UID" =>"Diana" , "PWD" => "lilolunita");
$con = sqlsrv_connect($serverName,$connectionInfo);

if($con){
	echo "conexion exitosa";
}else{
	echo "error";
}

?>