<?php
require_once '../control/PacienteControl.php';
class SessaoControl
{
    private $conexao;
    private PacoteControl $pacoteControl;

    function __construct($conexao, $pacoteControl)
    {
        $this->conexao = $conexao;
        $this->pacoteControl = $pacoteControl;
    }

    public function listarObj()
    {
        $sql = "SELECT * FROM sessao";
        $result = $this->conexao->query($sql);
        $sessoes = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $sessoes[] = $row;
            }
        }

        if (count($sessoes) != 0) {
            $vetSessoes = array();
            for ($i = 0; $i < count($sessoes); $i++) {
                $vetSessoes[$i] = new Sessao(
                    $this->pacoteControl->buscarPorCod($sessoes[$i]['codPacote']),
                    $sessoes[$i]['dataSessao'],
                    $sessoes[$i]['statusSessao'],
                    $sessoes[$i]['horario'],
                    $sessoes[$i]['observacoes'],
                    $sessoes[$i]['assinatura']
                );
                $vetSessoes[$i]->setCodSessao($sessoes[$i]['codSessao']);
            }
            return $vetSessoes;
        }
        return null;
    }

    public function atualizar($obj)
    {
        if ($obj instanceof Sessao) {
            $sql = "UPDATE sessao SET 
        dataSessao = '{$obj->getDataSessao()}',
        statusSessao = '{$obj->getStatusSessao()}',
        horario = '{$obj->getHorario()}',
        observacoes = '{$obj->getObservacoes()}',
        assinatura = '{$obj->getAssinatura()}',
        WHERE codSessao = '{$obj->getCodSessao()}'";
            $result = $this->conexao->query($sql);

            if ($result) {
                return true;
            }
        }
        return false;
    }

    public function cadastrar($obj)
    {
        if ($obj instanceof Sessao) {
            $sql = "INSERT INTO sessao (dataSessao, statusSessao, horario, observacoes, assinatura, codPacote) 
        VALUES ('{$obj->getDataSessao()}', '{$obj->getStatusSessao()}', '{$obj->getHorario()}', '{$obj->getObservacoes()}', '{$obj->getAssinatura()}', '{$obj->getPacote()->getCodPacote()}')";
            $result = $this->conexao->query($sql);
            if ($result) {
                return true;
            }
        }
        return false;
    }

    public function buscarPorCod($cod)
    {
        $sql = "SELECT * FROM sessao WHERE codSessao = $cod";
        $result = $this->conexao->query($sql);
        $dadosSessao = "";
        if ($result->num_rows > 0) {
            $dadosSessao = $result->fetch_assoc();
        }
        if ($dadosSessao != "") {
            $sessao = new Sessao(
                $dadosSessao['dataSessao'],
                $dadosSessao['statusSessao'],
                $dadosSessao['horario'],
                $dadosSessao['observacoes'],
                $dadosSessao['assinatura'],
                $dadosSessao['codPacote']
            );
            $sessao->setCodSessao($dadosSessao['codSessao']);
            return $sessao;
        }
        return null;
    }

    
}
