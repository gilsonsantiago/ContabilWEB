<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lancamentos
 *
 * @author Gilson
 */
class lancamentos {
    private $reg;
    private $ano;
    private $mes;
    private $idplan;
    private $data;
    private $operacao;
    private $valor;
    private $descricao;
    private $id;
    
    function getReg() {
        return $this->reg;
    }

    function getAno() {
        return $this->ano;
    }

    function getMes() {
        return $this->mes;
    }

    function getIdplan() {
        return $this->idplan;
    }

    function getData() {
        return $this->data;
    }

    function getOperacao() {
        return $this->operacao;
    }

    function getValor() {
        return $this->valor;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getId() {
        return $this->id;
    }

    function setReg($reg) {
        $this->reg = $reg;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setMes($mes) {
        $this->mes = $mes;
    }

    function setIdplan($idplan) {
        $this->idplan = $idplan;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setOperacao($operacao) {
        $this->operacao = $operacao;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setId($id) {
        $this->id = $id;
    }


}
