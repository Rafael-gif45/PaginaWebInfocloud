<?php

include "../Vista/HTML/cuenta.html";
include "../Vista/HTML/menu.html";
include "../Vista/HTML/inicio.html";
include "../Modelo/BaseDatos.php";
include "../Modelo/Cuenta.php";
include "../Modelo/sube.php";



$bd = new BaseDatos();
    {
    
        $cuenta = new Cuenta();
        {
        
            $cuenta->setNombre($_POST["nombre"]);
            $cuenta->setEdad($_POST["edad"]);
            $cuenta->setFecha($_POST["fecha"]);
            $cuenta->setCorreo($_POST["correo"]);
            $cuenta->setContra($_POST["contra"]);
            $cuenta->setContra2($_POST["contra2"]);
            

            $bd->guardarCuenta($cuenta);
        }
        
        
    }

    
?>