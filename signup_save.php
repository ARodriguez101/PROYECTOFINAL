 <!--Conexion con bd para guardar datos de registro de usuario-->
<?php include('index_header.php'); ?>
<body>
<?php
include('dbcon.php');
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];

$conn->query("insert into members (username,password,firstname,lastname,gender,image) values ('$username','$password','$firstname','$lastname','$gender','images/No_Photo_Available.jpg')");	
?>
 <!-- Script de alerta informando que el registro ha sido satisfactorio-->
<script>
	alert('Registro satisfactorio, ingresa con tus credenciales');
	window.location = 'index.php';
</script>
</body>
</html>