<?php

class Mascota {

public $Id;
public $Nombre;
public $Raza;

public $Duenyo;

public function MostrarDatos(){

    echo 'mascota id: '. $this->Id . '<br>';
    echo 'mascota nombre: '. $this->Nombre . '<br>';
    echo 'mascota Raza: '. $this->Raza . '<br>';
    echo  '<br>';
    echo 'dueño id: '. $this->Duenyo->Id . '<br>';
    echo 'dueño Nombre: '. $this->Duenyo->Nombre . '<br>';
    echo 'dueño Apellido: '. $this->Duenyo->Apellido . '<br>';
    echo 'dueño documento: '. $this->Duenyo->Documento . '<br>';
    echo 'dueño direccion: '. $this->Duenyo->Direccion . '<br>';
    echo 'dueño celular : '. $this->Duenyo->Celular . '<br>';
}

}