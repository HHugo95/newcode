<?php

namespace core\controller;
use core\classes\Database;
use core\classes\Functions;

class Main{

    public function index(){
              
        Functions::Layout([
            'layouts/html_head',
            'layouts/header',
            'inicio',
            'layouts/footer',
            'layouts/html_footer'
        ]);
    }

}