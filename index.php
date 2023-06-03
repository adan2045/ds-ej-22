<?php

require_once 'modelos/mascota.php';
require_once 'modelos/DuenyoMascota.php';

//instanciar clase dueño mascota 

$d=new DuenyoMascota;
$d->Id=1;
$d->Nombre='Pepita';
$d->Apellido='argento';
$d->Documento=33847857;
$d->Celular=155362254;
$d->Direccion='j.m de rosas 1184';


// intanciar una clase mascota 

$m=new Mascota();
$m->Id=45654;
$m->Nombre='canela';
$m->Raza='pastor aleman';
$m->Duenyo=$d;

$m->MostrarDatos();



