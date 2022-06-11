<?php

namespace core\classes;

use Exception;

class Functions{

    public static function Layout($estruturas,$dados = null){
        if(!is_array($estruturas)){
            throw new Exception("Coleção Invalida");
        }

        if(!empty($dados) && is_array($dados)){
            extract($dados);
        }

        foreach($estruturas as $estrutura){
            include("../core/views/$estrutura.php");
        }

    }

    public static function Logado(){

        return isset($_SESSION['usuario']);
    }
}