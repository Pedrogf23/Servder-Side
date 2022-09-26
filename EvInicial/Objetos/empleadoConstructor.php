<?php

class Empleado {

    public $nombre;
    public $apellido1;
    public $apellido2;
    public $sueldo;

    public function EmpleadoConstructor(string $nombre, string $apellido1, string $apellido2, int $sueldo = 1000): void {
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->sueldo = $sueldo;

    }

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

$miEmpleado->EmpleadoConstructor("Pedro", "González", "Fernández", 4000);

echo $miEmpleado->getNombreCompleto() ."<br>";
if($miEmpleado->debePagarImpuestos()){
    echo "Si ";
} else {
    echo "No ";
}
echo "debe pagar impuestos.";

?>