<?php

// crear clases


class Aprendiz{
    private $nombreAorendiz; //solo para esta clase y para solo los objetos de esta clase 
    private $genero;
    private $fechaNac;
    private $id;

    public function __construct() //cuando es publico le dice que lo pueden utilizar muchas clases
    {
        $this->nombreAorendiz = null; //le dice que pertenese a la clase y le da un valor nulo al primer objeto que se cree de este "nombreAprendiz"
        $this->genero = null;
        $this->fechaNac = null;
        $this->id = null;
    }

    public function adicionarDatosAprendiz($nomA,$gen,$fecN,$id){
        $this->nombreAorendiz = $nomA; //le dice que pertenese a la clase y le da un valor nulo al primer objeto que se cree de este "nombreAprendiz"
        $this->genero = $gen;
        $this->fechaNac = $fecN;
        $this->id = $id;
    }

    // metodo getter es un metodo que devuelve el contenido del atributo. se construlle de la siguiente manera
    public function getNombreAprendiz(){
        return $this->nombreAorendiz;
    }


    // metodo setter es un metodo que modifica el contenido del atributo

    public function setNombreAprendiz($nombre){
        $this->nombreAorendiz = $nombre;
    }
}
?>