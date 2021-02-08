<?php


$host_mysql = "localhost";
$user_mysql = "root";
$pass_mysql = "";
$db_mysql = "ishoping";
$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);

//Funcion para establecer coneccion con db
function connect(){
	$host_mysql = "localhost";
	$user_mysql = "root";
	$pass_mysql = "";
	$db_mysql = "ishoping";


 	$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);

	return $mysqli;
}
	
//Funcion Clear

// check admin

//Redir

//alert

//check user


//Nombre del cliente

//Sacar fecha

//Sacar estado del pedido

//Admin name coneccted


//Estado del pago

?>