 <!--Conexion bd para envio de mensaje-->
<?php
include('dbcon.php');
include('session.php');
$friend_id  = $_POST['friend_id'];
$my_message  = $_POST['my_message'];
/*Informacion del contenido dl mensaje*/
$conn->query("insert into message(reciever_id,content,date_sended,sender_id) values('$friend_id','$my_message',NOW(),'$session_id')");
?>
 <!--Script de alerta para mensaje enviado -->
<script>alert('Mensaje Enviado');</script>
<script>window.location = 'message.php'; </script>
