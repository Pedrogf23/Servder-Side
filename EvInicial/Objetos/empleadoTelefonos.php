<?php

class EmpleadoTelefonos {

    public $nombre;
    public $apellido1;
    public $apellido2;
    public $sueldo;
    public $arrayTelefonos = array();

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

    public function anyadirTelefono(int $tlf): void {
        $this->arrayTelefonos[count($this->arrayTelefonos)]  = $tlf;
    }

    public function listarTelefonos(): string {
        $telefonos = "";
        if(empty($this->arrayTelefonos[0])){
            $telefonos = "No hay teléfonos";
        } else {
            for($i = 0; $i < count($this->arrayTelefonos); $i++) {
                $telefonos=$telefonos." ".$this->arrayTelefonos[$i];
            }
        }
        return $telefonos."<br>";
    }

    public function vaciarTelefonos(): void {
        for($i = 0; $i <= count($this->arrayTelefonos); $i++){
            unset($this->arrayTelefonos[$i]);
        }
    }

}

$miEmpleado = new EmpleadoTelefonos();

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
echo "debe pagar impuestos.<br>";

$miEmpleado->anyadirTelefono(111222333);
$miEmpleado->anyadirTelefono(222333444);
$miEmpleado->anyadirTelefono(333444555);

echo $miEmpleado->listarTelefonos();

$miEmpleado->vaciarTelefonos();

echo $miEmpleado->listarTelefonos();

?>