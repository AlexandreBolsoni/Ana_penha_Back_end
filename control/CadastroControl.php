<?php
class CadastroControl
{
    private $conexao;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function listarOBJ()
    {
        $sql = "SELECT * FROM cadastro";
        $result = $this->conexao->query($sql);
        $cadastro = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $cadastro[] = $row;
            }
        }
        //percorrendo vetor de cadastro, criando objetos e arnazenando em outro vetor
        if (count($cadastro) > 0) {
            $vetCadastro = array();
            for ($i = 0; $i < count($cadastro); $i++) {
                $vetCadastro[$i] = new Cadastro(
                    $cadastro[$i]['nome'],
                    $cadastro[$i]['senha'],
                    $cadastro[$i]['cpf'],
                    $cadastro[$i]['email'],
                    $cadastro[$i]['sobrenome']
                );
                $vetCadastro[$i]->setCodCadastro($cadastro[$i]['cod_cadastro']);
            }
            return $vetCadastro;
        }
        return null;
    }
}
