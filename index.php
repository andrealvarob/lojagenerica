<?php

require './lib/autoload.php';

//instancia tela
$smarty = new Template();

//define tela
$smarty->display('index.tpl');

?>