<?php
    $connection = mysqli_connect('localhost','root','','book_db');
    if(isset($_POST['Enviar'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $ubicacion = $_POST['ubicacion'];
        $invitados = $_POST['invitados'];
        $llegada = $_POST['llegada'];
        $partida = $_POST['partida'];

        $request = " insert into book_form(nombre, email, telefono, direccion, ubicacion, invitados, llegada, partida) values('$nombre','$email','$telefono','$direccion','$ubicacion','$invitados','$llegada','$partida') ";

        mysqli_query($connection, $request);

        header('location:reserva.php');

    }else{
        echo'something went wrong try again';
    }
?>