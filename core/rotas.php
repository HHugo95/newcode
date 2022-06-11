<?php

//coleção de rotas
$rotas =[
    'inicio' => 'main@index',
    'login' => 'main@login',
    'cadastro' => 'main@cadastro',
    'perfil' => 'main@perfil',
];

//define ação por defeito
$ação = 'inicio';

//verifica se existe a ação na query string
if(isset($_GET['a'])){
    if(!key_exists($_GET['a'],$rotas)){
        $ação = 'inicio';
    }else {
        $acão = $_GET['a'];
    }
}

//trata a definição da rota
$partes = explode('@',$rotas[$ação]);
$controlador = 'core\\controller\\'.ucfirst($partes[0]);
$metodo = $partes[1];

$ctr = new $controlador();
$ctr -> $metodo();