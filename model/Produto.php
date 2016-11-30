<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author maicon_dionatans
 */
class Produto {
    
    private $id;
    private $tipoproduto;
    private $descricao;
    private $marca;
    private $modelo;
    private $fornecedor;
    private $precocompra;
    private $precovenda;
    private $quantidadeestoque;
    private $imagem;
    function getDescricao() {
        return $this->descricao;
    }

    function getMarca() {
        return $this->marca;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getFornecedor() {
        return $this->fornecedor;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setFornecedor($fornecedor) {
        $this->fornecedor = $fornecedor;
    }

        function getImagem() {
        return $this->imagem;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

        function getId() {
        return $this->id;
    }

    function getTipoproduto() {
        return $this->tipoproduto;
    }

    function getPrecocompra() {
        return $this->precocompra;
    }

    function getPrecovenda() {
        return $this->precovenda;
    }

    function getQuantidadeestoque() {
        return $this->quantidadeestoque;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTipoproduto($tipoproduto) {
        $this->tipoproduto = $tipoproduto;
    }

    function setPrecocompra($precocompra) {
        $this->precocompra = $precocompra;
    }

    function setPrecovenda($precovenda) {
        $this->precovenda = $precovenda;
    }

    function setQuantidadeestoque($quantidadeestoque) {
        $this->quantidadeestoque = $quantidadeestoque;
    }


}