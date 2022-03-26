<?php

require __DIR__. "/vendor/autoload.php";

use \App\Entity\skuCadastro;

$sku = skuCadastro::getCadastros();



include __DIR__. '/includes/header.php';
include __DIR__. '/includes/listagem.php'; 
include __DIR__. '/includes/footer.php';

?>