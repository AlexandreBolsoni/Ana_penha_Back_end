<?php 
class terapeutaControl {
    private $conexao;

    function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function listarOBJ(){
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

}