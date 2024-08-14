<?php
require_once 'classes/Cadastro.php';
class Paciente extends Cadastro
{
    private $codPaciente;
    private $dataNasc;
    private $telefone;

    public function __construct($nome, $senha, $cpf, $email, $dataNasc, $telefone, $sobrenome = null)
    {
        parent::__construct($nome, $senha, $cpf, $email, $sobrenome);
        $this->dataNasc = $dataNasc;
        $this->telefone = $telefone;
    }

    // Getters and Setters
    public function getCodPaciente()
    {
        return $this->codPaciente;
    }

    public function setCodPaciente($codPaciente){
        $this->codPaciente = $codPaciente;
    }

    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    function toString(){
        return parent::toString() . "<br>Data de Nascimento: " . $this->dataNasc . "<br>Telefone: " . $this->telefone;
    }
}
