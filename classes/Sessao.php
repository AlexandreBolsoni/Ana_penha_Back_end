<?php
require_once 'classes/Paciente.php';
require_once 'classes/Pacote.php';
class Sessao {
    private $codSessao;
    private $pacote;
    private $dataSessao;
    private $statusSessao;
    private $horario;
    private $observacoes;
    private $assinatura;

    public function __construct( Pacote $pacote, $dataSessao, $statusSessao, $horario, $observacoes, $assinatura) {
        $this->pacote = $pacote;
        $this->dataSessao = $dataSessao;
        $this->statusSessao = $statusSessao;
        $this->horario = $horario;
        $this->observacoes = $observacoes;
        $this->assinatura = $assinatura;
    }

    // Getters and Setters
    public function getCodSessao() {
        return $this->codSessao;
    }

    

    public function getPacote() {
        return $this->pacote;
    }

    public function getDataSessao() {
        return $this->dataSessao;
    }

    public function setDataSessao($dataSessao) {
        $this->dataSessao = $dataSessao;
    }

    public function getStatusSessao() {
        return $this->statusSessao;
    }

    public function setStatusSessao($statusSessao) {
        $this->statusSessao = $statusSessao;
    }

    public function getHorario() {
        return $this->horario;
    }

    public function setHorario($horario) {
        $this->horario = $horario;
    }

    public function getObservacoes() {
        return $this->observacoes;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    public function getAssinatura() {
        return $this->assinatura;
    }

    public function setAssinatura($assinatura) {
        $this->assinatura = $assinatura;
    }

    function toString()
    {
        return "Data: " . $this->dataSessao . "<br>Status: " . $this->statusSessao . "<br>Horário: " . $this->horario . "<br>Observações: " . $this->observacoes . "<br>Assinatura: " . $this->assinatura;
    }
 
}

?>
