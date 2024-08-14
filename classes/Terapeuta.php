<?php
 require_once 'classes/Cadastro.php';
class Terapeuta extends Cadastro {
    private $codTerapeuta;
    private $formacao;

    public function __construct($nome, $senha, $cpf, $email, $formacao, $sobrenome = null) {
        parent::__construct($nome, $senha, $cpf, $email, $sobrenome);
        $this->formacao = $formacao;
    }

    // Getters and Setters
    public function getCodTerapeuta() {
        return $this->codTerapeuta;
    }

    public function getFormacao() {
        return $this->formacao;
    }

    public function setFormacao($formacao) {
        $this->formacao = $formacao;
    }
    function toString()
    {
        return parent::toString() . "<br>Formação: " . $this->formacao;
    }
}

?>
