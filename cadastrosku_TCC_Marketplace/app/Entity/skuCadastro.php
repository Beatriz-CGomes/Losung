<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;


class skuCadastro{

    public $idsku;

    public $cnpj;

    public $idskuseller;

    public $categoria;

    public $fabricante;

    public $modelo;

    public $largura;

    public $comprimento;

    public $altura;

    public $peso;

    public $estoque;

    public $preco;

    public $descricao;

    public $ativo;

    public $datacriacao;

    public $Nome_sku;

    public function cadastrar(){

        //DEFINIR A DATA
            $this->datacriacao = date('Y-m-d H:i:S');

        //INSERIR VAGA NO BANCO
            $obskuCadastro = new Database('cad_sku');
            $this->idsku = $obskuCadastro->insert([
                'cnpj'          => $this->cnpj,
                'idskuseller'   => $this->idskuseller,
                'categoria'     => $this->categoria,
                'fabricante'    => $this->fabricante,
                'modelo'        => $this->modelo,
                'largura'       => $this->largura,
                'comprimento'   => $this->comprimento,
                'altura'        => $this->altura,
                'peso'          => $this->peso,
                'estoque'       => $this->estoque,
                'preco'         => $this->preco,
                'descricao'     => $this->descricao,
                'ativo'         => $this->ativo,
                'datacriacao'   => $this->datacriacao,
                'Nome_sku'      => $this->Nome_sku

            ]);

            return true;

    }

    public static function getCadastros($where = null, $order = null, $limit = null){
        return (new Database('cad_sku'))->select($where,$order,$limit)
                                        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

}

?>