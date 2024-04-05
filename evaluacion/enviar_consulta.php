<?php
    $nombre_form = $_POST['nombre'];
    $contacto_form = $_POST['contacto'];
    $email_form = $_POST['email'];
    $mensaje_form = $_POST['mensaje'];


    $cuerpo_mail =
    "Nombre: ". $nombre_form. "\r\n".
    "contacto: ". $contacto_form. "\r\n".
    "Email: ". $email_form. "\r\n".
    "Mensaje: ". $mensaje_form;

    mail("lucianoseratti@gmail.com","Mensaje enviado a nuestrositio.com","$cuerpo_mail");
?>
