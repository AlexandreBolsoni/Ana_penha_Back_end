<?php

class Cadastro {
    private $codCadastro;
    private $nome;
    private $senha;
    private $cpf;
    private $email;
    private $sobrenome;

    public function __construct($nome, $senha, $cpf, $email, $sobrenome = null) {
        $this->nome = $nome;
        $this->senha = $senha;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->sobrenome = $sobrenome;
    }

    // Getters and Setters
    public function getCodCadastro() {
        return $this->codCadastro;
    }
    public function setcodCadastro($codCadastro) {
        $this->codCadastro = $codCadastro;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function toString(){
        return "Nome: ". $this->nome .
            "<br>Sobrenome: ".  $this->sobrenome. 
            "<br>CPF: ". $this->cpf .
            "<br>E-mail: ".$this->email .
            "<br>Senha: ".$this->senha;
    }
}

?>
