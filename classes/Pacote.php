<?php
require_once 'classes/Terapeuta.php';
class Pacote {
    private $codPacote;
    private $terapeuta;
    private $dataInicio;
    private $valor;
    private $dataFinal;
    private $status;

    public function __construct(Terapeuta $terapeuta, $dataInicio, $valor, $dataFinal, $status) {
        $this->terapeuta = $terapeuta;
        $this->dataInicio = $dataInicio;
        $this->valor = $valor;
        $this->dataFinal = $dataFinal;
        $this->status = $status;
    }

    // Getters and Setters
    public function getCodPacote() {
        return $this->codPacote;
    }

    public function getTerapeuta() {
        return $this->terapeuta;
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
