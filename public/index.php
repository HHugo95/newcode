<?php
use core\classes\Database;
use core\classes\Functions;

// sessão iniciada
session_start();

//iniciar classes
require_once('../vendor/autoload.php');

//iniciar rotas
require_once('../core/rotas.php');

//$bd = new Database();
//$disciplina = $bd->select("SELECT * FROM disciplina");
//echo $disciplina[2]->nome_disciplina;
