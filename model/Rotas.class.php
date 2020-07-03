<?php

//classe que define as rotas do site
class Rotas{
    static function get_Pagina(){
        if(isset($_GET['pag'])){
            $pagina = $_GET['pag'];
        }
    }
}


?>