<?php
// Clase base
class MiembroComunidad {
    public string $nombre;
    public string $correo;
    public string $No_Identificacion;

    public function __construct(string $nombre, string $correo, string $id) {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->No_Identificacion = $id;
    }

    public function __toString(): string {
        return "Nombre: {$this->nombre}, Correo: {$this->correo}, ID: {$this->No_Identificacion}";
    }
}

// Empleado general
class Empleado extends MiembroComunidad {
    public float $salario;
    public string $fechaContratacion;
    public string $numeroEmpleado;
    public string $tipoContrato;

    public function __construct(string $nombre, string $correo, string $id,
                                float $salario, string $fechaContratacion, string $numeroEmpleado, string $tipoContrato) {
        parent::__construct($nombre, $correo, $id);
        $this->salario = $salario;
        $this->fechaContratacion = $fechaContratacion;
        $this->numeroEmpleado = $numeroEmpleado;
        $this->tipoContrato = $tipoContrato;
    }

    public function __toString(): string {
        return parent::__toString() . ", Empleado #: {$this->numeroEmpleado}, Salario: {$this->salario}, Tipo de Contrato: {$this->tipoContrato}, Fecha de Contratación: {$this->fechaContratacion}";
    }
}

// Profesor hereda de Empleado
class Profesor extends Empleado {
    public string $departamento;
    public string $nivelAcademico;
    public string $horarioOficina;
    public int $numeroPublicaciones;

    public function __construct(string $nombre, string $correo, string $id,
                                float $salario, string $fechaContratacion, string $numeroEmpleado, string $tipoContrato,
                                string $departamento, string $nivelAcademico, string $horarioOficina, int $numeroPublicaciones) {
        parent::__construct($nombre, $correo, $id, $salario, $fechaContratacion, $numeroEmpleado, $tipoContrato);
        $this->departamento = $departamento;
        $this->nivelAcademico = $nivelAcademico;
        $this->horarioOficina = $horarioOficina;
        $this->numeroPublicaciones = $numeroPublicaciones;
    }

    public function __toString(): string {
        return parent::__toString() . ", Departamento: {$this->departamento}, Nivel Académico: {$this->nivelAcademico}, Publicaciones: {$this->numeroPublicaciones}, Horario Oficina: {$this->horarioOficina}";
    }
}

// Administrador hereda de Profesor
class Administrador extends Profesor {
    public string $cargo;
    public string $oficina;
    public string $areaResponsabilidad;

    public function __construct(string $nombre, string $correo, string $id,
                                float $salario, string $fechaContratacion, string $numeroEmpleado, string $tipoContrato,
                                string $departamento, string $nivelAcademico, string $horarioOficina, int $numeroPublicaciones,
                                string $cargo, string $oficina, string $areaResponsabilidad) {
        parent::__construct($nombre, $correo, $id, $salario, $fechaContratacion, $numeroEmpleado, $tipoContrato,
                            $departamento, $nivelAcademico, $horarioOficina, $numeroPublicaciones);
        $this->cargo = $cargo;
        $this->oficina = $oficina;
        $this->areaResponsabilidad = $areaResponsabilidad;
    }

    public function __toString(): string {
        return parent::__toString() . ", Cargo: {$this->cargo}, Oficina: {$this->oficina}, Área de Responsabilidad: {$this->areaResponsabilidad}";
    }
}

// Estudiante base
class Estudiante extends MiembroComunidad {
    public string $matricula;
    public string $carrera;
    public float $promedio;
    public int $creditos;
    public string $estado;

    public function __construct(string $nombre, string $correo, string $id,
                                string $matricula, string $carrera, float $promedio, int $creditos, string $estado) {
        parent::__construct($nombre, $correo, $id);
        $this->matricula = $matricula;
        $this->carrera = $carrera;
        $this->promedio = $promedio;
        $this->creditos = $creditos;
        $this->estado = $estado;
    }

    public function __toString(): string {
        return parent::__toString() . ", Matrícula: {$this->matricula}, Carrera: {$this->carrera}, Promedio: {$this->promedio}, Créditos: {$this->creditos}, Estado: {$this->estado}";
    }
}

// Estudiante de licenciatura
class EstudianteLicenciatura extends Estudiante {
    public string $nivel;
    public string $planEstudios;

    public function __construct(string $nombre, string $correo, string $id,
                                string $matricula, string $carrera, float $promedio, int $creditos, string $estado,
                                string $nivel, string $planEstudios) {
        parent::__construct($nombre, $correo, $id, $matricula, $carrera, $promedio, $creditos, $estado);
        $this->nivel = $nivel;
        $this->planEstudios = $planEstudios;
    }

    public function __toString(): string {
        return parent::__toString() . ", Nivel: {$this->nivel}, Plan de Estudios: {$this->planEstudios}";
    }
}

// Estudiante de posgrado
class EstudiantePosgrado extends Estudiante {
    public string $programa;
    public string $temaTesis;
    public string $tutor;

    public function __construct(string $nombre, string $correo, string $id,
                                string $matricula, string $carrera, float $promedio, int $creditos, string $estado,
                                string $programa, string $temaTesis, string $tutor) {
        parent::__construct($nombre, $correo, $id, $matricula, $carrera, $promedio, $creditos, $estado);
        $this->programa = $programa;
        $this->temaTesis = $temaTesis;
        $this->tutor = $tutor;
    }

    public function __toString(): string {
        return parent::__toString() . ", Programa: {$this->programa}, Tesis: {$this->temaTesis}, Tutor: {$this->tutor}";
    }
}

// Egresado
class Egresado extends MiembroComunidad {
    public int $anioGraduacion;
    public string $titulo;
    public string $empresa;
    public string $puesto;
    public bool $esParteAsociacion;

    public function __construct(string $nombre, string $correo, string $id,
                                int $anioGraduacion, string $titulo, string $empresa, string $puesto, bool $esParteAsociacion) {
        parent::__construct($nombre, $correo, $id);
        $this->anioGraduacion = $anioGraduacion;
        $this->titulo = $titulo;
        $this->empresa = $empresa;
        $this->puesto = $puesto;
        $this->esParteAsociacion = $esParteAsociacion;
    }

    public function __toString(): string {
        $asociacion = $this->esParteAsociacion ? 'Sí' : 'No';
        return parent::__toString() . ", Año de Graduación: {$this->anioGraduacion}, Título: {$this->titulo}, Empresa: {$this->empresa}, Puesto: {$this->puesto}, Miembro Asociación: {$asociacion}";
    }
}
?>
