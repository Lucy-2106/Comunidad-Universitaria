<?php
require_once 'comunidad.php';

class Empleado extends Comunidad {
    public $salario;
    public $contratacion;
    public $numEmpleado;

    public function __construct($nombre, $correo, $id, $salario, $contratacion, $numEmpleado) {
        parent::__construct($nombre, $correo, $id);
        $this->salario = $salario;
        $this->contratacion = $contratacion;
        $this->numEmpleado = $numEmpleado;
    }

    public function establecerSalario($salario) {
        $this->salario = $salario;
    }

    public function establecerContratacion($contratacion) {
        $this->contratacion = $contratacion;
    }

    public function establecerNumeroEmpleado($numEmpleado) {
        $this->numEmpleado = $numEmpleado;
    }
}

class Profesor extends Empleado {
    public $departamento;
    public $horario;
    public $asignaturas = [];

    public function establecerDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    public function establecerHorario($horario) {
        $this->horario = $horario;
    }

    public function perfilDocente() {
        return "Asignaturas impartidas: " . implode(", ", $this->asignaturas);
    }
}

class Personal extends Empleado {
    public $areaTrabajo;
    public $turno;

    public function establecerTurno($turno) {
        $this->turno = $turno;
    }

    public function verificarAcceso() {
        return "Acceso verificado para el área: $this->areaTrabajo";
    }
}

class Directivo extends Empleado {
    public $cargo;
    public $oficina;
    public $areaResponsabilidad;

    public function establecerCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function establecerAreaResponsabilidad($area) {
        $this->areaResponsabilidad = $area;
    }
}
?>
