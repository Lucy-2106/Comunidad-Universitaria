<?php
require_once 'comunidad.php';

// Asumiendo que existe una clase MiembroComunidad
class Estudiante extends MiembroComunidad {
    public $matricula;
    public $carrera;
    public $creditos;
    public $promedio;

    public function __construct($nombre, $correo, $identificacion, $matricula, $carrera, $creditos) {
        parent::__construct($nombre, $correo, $identificacion);
        $this->matricula = $matricula;
        $this->carrera = $carrera;
        $this->creditos = $creditos;
        $this->promedio = 0;
    }

    public function establecerCarrera($carrera) {
        $this->carrera = $carrera;
    }

    public function establecerPromedio($promedio) {
        $this->promedio = $promedio;
    }

    public function establecerCreditos($creditos) {
        $this->creditos = $creditos;
    }

    public function calcularPorcentaje() {
        return ($this->creditos / 100) * 100; // Asumiendo base de 100 créditos
    }
}

class EstudiantePregrado extends Estudiante {
    public $anioCursa;

    public function __construct($nombre, $correo, $identificacion, $matricula, $carrera, $creditos, $anioCursa) {
        parent::__construct($nombre, $correo, $identificacion, $matricula, $carrera, $creditos);
        $this->anioCursa = $anioCursa;
    }

    public function planDeEstudios() {
        return "Plan de estudios de $this->carrera, año $this->anioCursa";
    }
}

class EstudiantePosgrado extends Estudiante {
    public $programa;

    public function __construct($nombre, $correo, $identificacion, $matricula, $carrera, $creditos, $programa) {
        parent::__construct($nombre, $correo, $identificacion, $matricula, $carrera, $creditos);
        $this->programa = $programa;
    }

    public function avances() {
        return "Avances del programa $this->programa";
    }
}

class Egresado extends MiembroComunidad {
    public $anioGraduacion;
    public $titulo;

    public function __construct($nombre, $correo, $identificacion, $anioGraduacion, $titulo) {
        parent::__construct($nombre, $correo, $identificacion);
        $this->anioGraduacion = $anioGraduacion;
        $this->titulo = $titulo;
    }

    public function establecerTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function datosLaborales() {
        return "Egresado con título de $this->titulo en el año $this->anioGraduacion";
    }
}
?>
