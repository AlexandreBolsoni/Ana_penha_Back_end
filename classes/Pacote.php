<?php
require_once 'classes/Terapeuta.php';
require_once 'classes/Paciente.php';
class Pacote {
    private $codPacote;
    private $dataInicio;
    private $valor;
    private $dataFinal;
    private $status;
    private terapeuta $terapeuta;
    private paciente $paciente; 

    public function __construct(Terapeuta $terapeuta,$paciente, $dataInicio, $valor, $dataFinal, $status) {
        $this->terapeuta = $terapeuta;
        $this->paciente = $paciente;
        $this->dataInicio = $dataInicio;
        $this->valor = $valor;
        $this->dataFinal = $dataFinal;
        $this->status = $status;
    }

    // Getters and Setters
    public function getCodPacote() {
        return $this->codPacote;
    }
    public function setCodPacote($codPacote) {
        $this->codPacote = $codPacote;
    }

    public function getTerapeuta() {
        return $this->terapeuta;
    }
    public function setTerapeuta($terapeuta) {
        $this->terapeuta = $terapeuta;
    }
    public function getPaciente() {
        return $this->paciente;
    }
    public function setPaciente($paciente) {
        $this->paciente = $paciente;
    }


    public function getDataInicio() {
        return $this->dataInicio;
    }

    public function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getDataFinal() {
        return $this->dataFinal;
    }

    public function setDataFinal($dataFinal) {
        $this->dataFinal = $dataFinal;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
    function toString(){
        return $this->terapeuta->toString() . "<br>Data de Inicio: " . $this->dataInicio . "<br>Valor: " . $this->valor . "<br>Data Final: " . $this->dataFinal . "<br>Status: " . $this->status;
    }
}

?>
