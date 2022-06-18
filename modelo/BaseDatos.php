<?php

class BaseDatos()

{
    private $sql

    public function __construct()

    {
        $this->sql = new mysqli("localhost" ,"aplicacion", "aplicacion", "aplicacion");


        if ($this->sql->errno)
        {
            echo"Error de conexion";
        }
    }

    public function guardarCuenta($cuenta)
    {
        $consulta = "INSERT INTO registro(nombre, edad, fecha, correo, contrasenia, rcontrasenia)
        VALUES ('".$cuenta->getNombre()."' , '".$cuenta->getEdad()."' , '".$cuenta->getFecha()."' , '"
        .$cuenta->getCorreo()."' , '".$cuenta->getContra()."' , '".$cuenta->getContra2()."')";
    
        
        $this->sql->query($consulta);
        //echo $consulta;
    }


       







?>