<?php
class producto {
    public $Id;
    public $Nombre;
    public $Codigo;
    public $Precio;
    public $Marca;
    public $ListaProveedores =array ();

    public function MostrarInformacion (){
        echo 'producto ' . $this->Nombre . '<br>';
        echo 'Codigo ' . $this->Codigo . '<br>';
        echo 'Precio ' . $this->Precio . '<br>';
        echo 'Marca ' . $this->Marca . '<br>';
        echo 'proveedores: <br>';
        foreach($this->ListaProveedores as $p){
            echo $p->Nombre . $p->CUIL . $p->direccion . $telefono . '<br>';
        }
    }
}