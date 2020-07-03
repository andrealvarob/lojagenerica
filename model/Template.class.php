<?php

    //classe que define os templates para telas
    class Template extends Smarty{
        function __construct(){
            parent:: __construct();

            $this->setTemplateDir('view/');
            $this->setCompileDir('view/compile/');
            $this->setCacheDir('view/cache/');
        }
    }
    
?>