
<?php
 
 class Inicio
 {
    private $nombre;
    private $contrasenia;


    public function __construct()

    {
        $this->nombre=""
        $this->contrasenia="";
    }


    public function setNombre($nombre) {$this->nombre=$nombre;}
    public function getNombre() {return $this->nombre;}

    public function setContrasenia($contrasenia) {$this->$contrasenia;}
    public function getContrasenia() {return $this->contrasenia;}
 }


?>