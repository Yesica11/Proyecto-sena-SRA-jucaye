<?php
require "../includes/config/database.html";
$database = conectarDataBase();

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    $Nombre = $_POST['usuario'];
    $contraseña = $_POST['password'];

    session_start();
    $_SESSION ['usuario'] = $Nombre;

    $query = "SELECT * FROM usuarios WHERE Nombre = '$Nombre' and Contraseña ='$contraseña'";

    if (mysqli_num_rows(mysqli_query($database, $query))) {
        header ("location:../Menu_Principal_Suelo.html");
    }
    else {
        $_SESSION ["Error"] = 'EL ingreso no es valido';
        header("location:../Login.html");
        exit();
    }
    mysqli_close($dataBase);
}