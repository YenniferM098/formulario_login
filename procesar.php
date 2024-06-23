<?php
$user="valor";
$password="valor";
$edad="valor";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $user = !empty($_POST['user']) ? $_POST['user'] : "requerido";
        $password = !empty($_POST['password']) ? $_POST['password'] : "requerido";
        $edad = !empty($_POST['edad']) ? $_POST['edad'] : "requerido";

        if($user=="requerido" || $password=="requerido" || $edad=="requerido" ){
            echo "Algunos campos son requeridos, verifique su formulario";
        }else {

            if($user !=="luis" || $password !=="mendoza" ){

                echo "Usuario o contraseña incorrectos";

            }elseif(!is_numeric($edad) || $edad<18){
                echo "Debe ser mayor de edad";
            }else{
                echo "Login exitoso";
            } 
        }
    }
?>