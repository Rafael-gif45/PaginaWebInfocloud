<?php


class cuenta
{
    private $nombre;
    private $edad;
    private $fecha;
    private $correo;
    private $contra;
    private $contra2;

    public __construct()

    {
        $this->nombre="";
        $this->edad=0;
        $this->fecha="";
        $this->correo="";
        $this->contra="";
        $this->contra2="";
    }

    public function setNombre($nombre) {$this->nombre=$nombre;}
    public function getNombre() {return $this->nombre;}

    public function setEdad($edad) {$this->edad=$edad;}
    public function getEdad() {return $this->edad;}

    public function setFecha($fecha) {$this->fecha=$fecha;}
    public function getFecha() {return $this->fecha;}
    
    public function setCorreo($correo) {$this->correo=$correo;}
    public function getCorreo() {return $this->correo;}

    public function setContra($contra) {$this->contra=$contra;}
    public function getContra() {return $this->contra;}
    
    public function setContra2($contra2) {$this->contra2=$contra2;}
    public function getContra2() {return $this->contra2;}
}




?>