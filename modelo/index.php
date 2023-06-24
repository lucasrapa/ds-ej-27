<?php
require_once 'modelo/producto.php';
require_once 'modelo/proveedores.php';

$r = new producto();
$r->Id = 1;
$r->Nombre = 'Barra Tybo';
$r->Codigo = 'rpsa';
$r->Precio = 1450;
$r->Marca = 'Tonutti';

$p1 = new proveedores();
$p1->Id = 1;
$p1->Nombre = 'Segser';
$p1->CUIL = 20452146471;
$p1->$direccion = 'Juan Jose Paso 6785';
$p1->$telefono = 3416842356;


$p2 = new proveedores();
$p2->Id = 1;
$p2->Nombre = 'Food Corner';
$p2->CUIL = 2077452341;
$p2->$direccion = 'Oroño 675';
$p2->$telefono = 3415426988;


$p3 = new proveedores();
$p3->Id = 1;
$p3->Nombre = 'Mex Food';
$p3->CUIL = 20184623558;
$p3->$direccion = 'Junin 1544';
$p3->$telefono = 3412389644;

$r->ListaProveedores[] =$p1;
$r->ListaProveedores[] =$p2;
$r->ListaProveedores[] =$p3;