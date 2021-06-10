<!-- Cierre de sesion de usuario -->
<?php
session_start();
session_destroy();
header('location:index.php');
?>