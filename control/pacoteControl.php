<?php
require_once '../control/PacienteControl.php';
require_once '../control/TerapeutaControl.php';

class PacoteControl
{
    private $conexao;
    private PacienteControl $pacienteControl;
    private TerapeutaControl $terapeutaControl;

    function __construct($conexao, $pacienteControl, $terapeutaControl)
    {
        $this->conexao = $conexao;
        $this->pacienteControl = $pacienteControl;
        $this->terapeutaControl = $terapeutaControl;
    }

    public function listarOBJ()
    {
        //buscando dados do pacote
        $sql = "SELECT * FROM pacote";
        $result = $this->conexao->query($sql);
        $pacotes = array();

        //ARMAZENANDO os dados
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $pacotes[] = $row;
            }
        }
        //percorrendo 'pacote', criando objetos e arnazenando em outro vetor
        if (count($pacotes) != 0) {
            $vetPacotes = array();
            for ($i = 0; $i < count($pacotes); $i++) {
                $vetPacotes[$i] = new Pacote(
                    $pacotes[$i]['dataInicio'],
                    $pacotes[$i]['valor'],
                    $pacotes[$i]['dataFinal'],
                    $pacotes[$i]['status'],
                    $pacotes[$i]['codPacote'],
                    $pacotes[$i]['codTerapeuta'],
                    $pacotes[$i]['codPaciente'],

                    //retornar objeto de pacientes
                    $this->pacienteControl->buscarPorCod($pacotes[$i]['codPaciente']),
                    //retornar objeto de terapeuta
                    $this->terapeutaControl->buscarPorCod($pacotes[$i]['codTerapeuta'])
                );
                $vetPacotes[$i]->setCodPacote($pacotes[$i]['codPacote']);
            }
            return $vetPacotes;
        }
        return null;
    }
    public function atualizar($obj)
    {
        if ($obj instanceof Pacote) {
            $sql = "UPDATE pacote SET 
       dataInicio = '{$obj->getDataInicio()}',
        dataFinal = '{$obj->getDataFinal()}',
        valor = '{$obj->getValor()}',
        status= '{$obj->getStatus()}', 
        WHERE codPacote = {$obj->getCodPacote()}";
            $result = $this->conexao->query($sql);
            if ($result) {
                return true;
            }
        }
        return false;
    }
    //buscar pacote  
    public function buscarPorCod($cod) {
        $sql = "SELECT * FROM pacote WHERE codPacote = $cod";
        $result = $this->conexao->query($sql);
        $dadosPacote = "";
        if ($result->num_rows > 0) {
            $dadosPacote = $result->fetch_assoc();
        }
            if ($dadosPacote != "") {
                $pacote = new Pacote(
                    $dadosPacote['dataInicio'],
                    $dadosPacote['valor'],
                    $dadosPacote['dataFinal'],
                    $dadosPacote['status'],
                    $dadosPacote['codPacote'],
                    $dadosPacote['codTerapeuta'],
                    $dadosPacote['codPaciente'],
                    
                         //retornar objeto de pacientes
                         $this->pacienteControl->buscarPorCod($dadosPacote['codPaciente']),
                         //retornar objeto de terapeuta
                         $this->terapeutaControl->buscarPorCod($dadosPacote['codTerapeuta'])
                     );

                $pacote->setCodPacote($dadosPacote['codPacote']);
                return $pacote;
            }
            return null;
        
        
    }
   

}
