<?php

require __DIR__. "/vendor/autoload.php";

use \App\Entity\skuCadastro;

//VALIDAÇÃO DO POST

if(isset(   $_POST['cnpj'],
            $_POST['nome'],
            $_POST['codigo'],
            $_POST['categoria'],
            $_POST['fabricante'],
            $_POST['modelo'],
            $_POST['largura'],
            $_POST['comprimento'],
            $_POST['altura'],
            $_POST['peso'],
            $_POST['estoque'],
            $_POST['preco'],
            $_POST['descricao'],
            $_POST['ativo']
            ))
            {

                $obSkucadastro = new skuCadastro;  
                $obSkucadastro->cnpj            = $_POST['cnpj'];
                $obSkucadastro->Nome_sku        = $_POST['nome'];
                $obSkucadastro->idskuseller     = $_POST['codigo'];
                $obSkucadastro->categoria       = $_POST['categoria'];
                $obSkucadastro->fabricante      = $_POST['fabricante'];
                $obSkucadastro->modelo          = $_POST['modelo'];
                $obSkucadastro->largura         = $_POST['largura'];
                $obSkucadastro->comprimento     = $_POST['comprimento'];
                $obSkucadastro->altura          = $_POST['altura'];
                $obSkucadastro->peso            = $_POST['peso'];
                $obSkucadastro->estoque         = $_POST['estoque'];
                $obSkucadastro->preco           = $_POST['preco'];
                $obSkucadastro->descricao       = $_POST['descricao'];
                $obSkucadastro->ativo           = $_POST['ativo'];
                $obSkucadastro->cadastrar();

                header('location: index.php?status=success');
                exit;
            
            }

include __DIR__. '/includes/header.php';
include __DIR__. '/includes/formulario.php';
include __DIR__. '/includes/footer.php';

?>