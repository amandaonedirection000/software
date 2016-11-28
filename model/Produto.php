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
class Funcionario {
    
    private $id;
    private $tipoproduto;
    private $precocompra;
    private $precovenda;
    private $quantidadeestoque;
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