<!Doctype html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Gracias por contactarse</title>

<style>
	body{
		font-family: Arial, helvetica, sans-serif;
		font-size: 1em;
		text-align: center;
		color: #707173
	}
</style>
</head>
<body>

<?php

/**************************************
Recibe los datos ingresados
**************************************/
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

/**************************************
Si intenta poner un link con http:
**************************************/
if (eregi('http', $mensaje)) {
	die("No están permitidos los links con -http://-! ! ");
}

/**************************************
Si ingresa un mail no válido
**************************************/
if (!$email =="" && (!strstr($email,"@") || !strstr($email,"."))) {
	echo "<h2>Por favor ingrese un e-mail válido</h2>\n";
	$badinput = "<h4>Su mensaje NO ha sido enviado</h4>\n";
	echo $badinput;
	die("<a href='javascript: history.go(-1)'>Regresar</a>");
}

/**************************************
Si no rellena los campos necesarios
**************************************/
if (empty($nombre) || empty($email)|| empty($telefono) || empty($mensaje)) {
	echo "<h2>Por favor rellene toda las casillas</h2>\n";
	die("<a href='javascript: history.go(-1)'>Regresar</a>");
}

$attn = $attn ;

/**************************************
Aquí debes ingresar el asunto del mail
**************************************/
$subject = 'Mensaje desde formulario de contacto de Cupcackes con Jessy';
$comentarios=stripcslashes($comentarios);// pasa los símbolos a utf-8

/**************************************
Aquí se genera el cuerpo del mensaje
**************************************/
$message = "De: $nombre \n
E-mail: $email \n
Teléfono: $telefono \n
Mensaje: $mensaje";

$from = "From: $email\r\n";

/**************************************
Ingresa mail receptor
**************************************/
mail("ronaldot2013@gmail.com", $subject, $message,$from);
?>

<script type="text/javascript">
/**************************************
Ingresa la página a la cura redireccionará luego de enviar el mensaje
**************************************/
window.location="contactook.php";
</script>

</body>
</html>

