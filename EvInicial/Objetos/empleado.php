<?php

class Empleado {

    public $nombre;
    public $apellido1;
    public $apellido2;
    public $sueldo;

    public function getNombreCompleto(): string {
        return $this->nombre ." ". $this->apellido1 ." ". $this->apellido2;
    }

    public function debePagarImpuestos(): bool {
        if($this->sueldo <= 3333) {
            return false;
        } else {
            return true;
        }
    }

}

$miEmpleado = new Empleado();

$miEmpleado->nombre = "Pedro";
$miEmpleado->apellido1 = "González";
$miEmpleado->apellido2 = "Fernández";
$miEmpleado->sueldo = 3334;

echo $miEmpleado->getNombreCompleto() ."<br>";
if($miEmpleado->debePagarImpuestos()){
    echo "Si ";
} else {
    echo "No ";
}
echo "debe pagar impuestos.";

?>