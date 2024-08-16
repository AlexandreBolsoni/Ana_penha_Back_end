<?php
class terapeutaControl
{
    private $conexao;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function listarOBJ()
    {
        //buscando dados do terapeuta
        $sql = "SELECT * FROM terapeuta";
        $result = $this->conexao->query($sql);
        $terapeutas = array();

        //ARMAZENANDO os dados
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $terapeutas[] = $row;
            }
        }
        //percorrendo 'terapeuta', criando objetos e arnazenando em outro vetor
        if (count($terapeutas) != 0) {
            $vetTerapeuta = array();
            for ($i = 0; $i < count($terapeutas); $i++) {
                $vetTerapeuta[$i] = new Terapeuta(
                    $terapeutas[$i]['nome'],
                    $terapeutas[$i]['cpf'],
                    $terapeutas[$i]['email'],
                    $terapeutas[$i]['sobrenome'],
                    $terapeutas[$i]['senha']
                );
                $vetTerapeuta[$i]->setCodTerapeuta($terapeutas[$i]['cod_terapeuta']);
            }
            return $vetTerapeuta;
        }
        return null;
    }

    public function buscarPorCod($cod)
    {
        //buscando da tabela cadastro
        $sql = "SELECT * FROM cadastro WHERE cod_terapeuta = $cod";
        $result = $this->conexao->query($sql);
        $dadosCadastro = "";

        if ($result->num_rows > 0) {
            $dadosCadastro = $result->fetch_assoc();

            //buscando da tabela terapeuta
            $sql = "SELECT * FROM terapeuta WHERE cod_terapeuta = $cod";
            $result = $this->conexao->query($sql);
            $dadosTerapeuta = "";

            //armazenando os dados
            if ($result->num_rows > 0) {
                $dadosTerapeuta = $result->fetch_assoc();
            } else{
                $dadosTerapeuta = "";
            }
        }else{
            $dadosCadastro = "";
        }

        if ($dadosCadastro != "" && $dadosTerapeuta != "") {
            $terapeuta = new Terapeuta(
                $dadosCadastro['nome'],
                $dadosCadastro['sobrenome'],
                $dadosCadastro['cpf'],
                $dadosCadastro['email'],
                $dadosCadastro['senha'],
                $dadosTerapeuta['formacao'],
                $dadosTerapeuta['codTerapeuta']

               
            );
            $terapeuta->setCodTerapeuta($dadosCadastro['codTerapeuta']);

    }
}
}