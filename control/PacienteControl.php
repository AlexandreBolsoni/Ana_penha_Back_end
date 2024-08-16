<?php
class PacienteControl
{
    private $conexao;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }
    public function ListarOBJ()
    {
        $sql = "SELECT * FROM paciente";
        $result = $this->conexao->query($sql);
        $pacientes = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $pacientes[] = $row;
            }
        }
        //buscando dados do cadastro
        $sql = "SELECT * FROM cadastro";
        $result = $this->conexao->query($sql);
        $cadastros = array();

        //armazenar dados dos pacientes baseados no cadastro
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                foreach ($pacientes as $paciente) {
                    if ($row['codCadastro'] == $paciente['codPaciente']) {
                        $cadastros[] = $row;
                    }
                }
            }
        }

        //percorrendo vetor de cadastro, criando objetos e arnazenando em outro vetor
        if (count($cadastros) != 0 && count($pacientes) != 0) {
            $pacientesPessoas   = array();
            for ($i = 0; $i < count($cadastros); $i++) {
                $pacientesPessoas[$i] = new Paciente(
                    $cadastros[$i]['nome'],
                    $cadastros[$i]['senha'],
                    $cadastros[$i]['cpf'],
                    $cadastros[$i]['email'],
                    $cadastros[$i]['sobrenome'],
                    $pacientes[$i]['dataNasc'],
                    $pacientes[$i]['telefone']

                );
                $pacientesPessoas[$i]->setCodPaciente($pacientes[$i]['codPaciente']);
            }
            return $pacientesPessoas;
        }
        return null;
    }


    public function atualizar($obj)
    {
        if ($obj instanceof Paciente) {
            //atualizando tabela cadastro
            $sql = "UPDATE cadastro SET nome = '{$obj->getNome()}', senha = '{$obj->getSenha()}', cpf = '{$obj->getCpf()}', email = '{$obj->getEmail()}', sobrenome = '{$obj->getSobrenome()}' WHERE cod_cadastro = '{$obj->getCodPaciente()}'";
            $result = $this->conexao->query($sql);

            if ($result) {
                //atualizando pacientes 
                $sql = "UPDATE paciente SET dataNasc = '{$obj->getDataNasc()}', telefone = '{$obj->getTelefone()}' WHERE codPaciente = '{$obj->getCodPaciente()}'";
                $result = $this->conexao->query($sql);
            }
        }
        return false;
    }
    public function cadastrar($obj)
    {
        if ($obj instanceof Paciente) {
            $sql = "INSERT INTO cadastro (nome, senha, cpf, email, sobrenome) VALUES ('{$obj->getNome()}','{$obj->getSenha()}','{$obj->getCpf()}','{$obj->getEmail()}','{$obj->getSobrenome()}')";
            $result = $this->conexao->query($sql);

            if ($result) {
                $sql = "SELECT cod_cadastro FROM cadastro WHERE cpf = '{$obj->getCpf()}'";
                $result = $this->conexao->query($sql);
                $lastAdd = $result->fetch_assoc();

                $sql = "INSERT INTO paciente (dataNasc, telefone, codPaciente) VALUES ('{$obj->getDataNasc()}','{$obj->getTelefone()}','{$lastAdd['cod_cadastro']}')";
                $result = $this->conexao->query($sql);
                return  true;
            }
        }
        return false;
    }
    public function buscarPorCod($cod)
    {
        $sql = "SELECT * FROM cadastro WHERE cod_cadastro = '{$cod}'";
        $result = $this->conexao->query($sql);
        $dadosCadastro = "";

        if ($result->num_rows > 0) {
            $dadosCadastro = $result->fetch_assoc();
            $sql = "SELECT * FROM paciente WHERE codPaciente = '{$cod}'";
            $result = $this->conexao->query($sql);
            $dadosPaciente = $result->fetch_assoc();

            if ($result->num_rows > 0) {
                $dadosPaciente = $result->fetch_assoc();
            } else {
                $dadosPaciente = "";
            }
        } else {
            $dadosCadastro = "";
        }
        //criandopaciente com todos os dados
        if ($dadosPaciente != "" && $dadosCadastro != "") {
            $paciente = new Paciente(
                $dadosCadastro['nome'],
                $dadosCadastro['senha'],
                $dadosCadastro['cpf'],
                $dadosCadastro['email'],
                $dadosCadastro['sobrenome'],
                $dadosPaciente['dataNasc'],
                $dadosPaciente['telefone']
            );
            $paciente->setCodPaciente($dadosPaciente['codPaciente']);
            return $paciente;
        } else {
            return null;
        }
    }
    public function buscarPorCpf($cpf)
    {
        $sql = "SELECT * FROM cadastro WHERE cpf = '{$cpf}'";
        $result = $this->conexao->query($sql);
        $dadosCadastro = "";

        if ($result->num_rows > 0) {
            $dadosCadastro = $result->fetch_assoc();
            $sql = "SELECT * FROM paciente WHERE codPaciente = 'cod_paciente'";
            $result = $this->conexao->query($sql);
            $dadosPaciente = $result->fetch_assoc();

            if ($result->num_rows > 0) {
                $dadosPaciente = $result->fetch_assoc();
            } else {
                $dadosPaciente = "";
            }
        } else {
            $dadosCadastro = "";
        }
        //criandopaciente com todos os dados
        if ($dadosPaciente != "" && $dadosCadastro != "") {
            $paciente = new Paciente(
                $dadosCadastro['nome'],
                $dadosCadastro['senha'],
                $dadosCadastro['cpf'],
                $dadosCadastro['email'],
                $dadosPaciente['dataNasc'],
                $dadosPaciente['telefone']
            );
            $paciente->setCodPaciente($dadosPaciente['codPaciente']);
            return $paciente;
        }

        return null;
    }
}
