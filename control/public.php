<?php
// Definindo o caminho para todas as classes serem requeridas corretamente
$path = __DIR__ . '/';

require_once $path . '../classes/Paciente.php';
require_once $path . '../classes/Pacote.php';
require_once $path . '../classes/Sessao.php';
require_once $path . '../classes/Terapeuta.php';
require_once $path . '../classes/Cadastro.php';
require_once $path . '../classes/DataBase.php';
require_once $path . '../control/CadastroControl.php';
require_once $path . '../control/PacienteControl.php';
require_once $path . '../control/PacoteControl.php';
require_once $path . '../control/SessaoControl.php';
require_once $path . '../control/TerapeutaControl.php';

$db = new Database("localhost", "root", "", "fisioterapiadb");
$CadastroControl = new CadastroControl($db);
$PacienteControl = new PacienteControl($db);
$PacoteControl = new PacoteControl($db);
$SessaoControl = new SessaoControl($db);
$TerapeutaControl = new TerapeutaControl($db);
?>