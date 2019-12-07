<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of planocontas
 *
 * @author Gilson
 */
class planocontas {
    
    private $idplan;
    private $ano;
    private $mes;
    private $dia;
    private $conta;
    private $descricao;
    private $grau;
    private $natureza;
    private $tplanca;
    private $tipo;
    private $estado;
    private $dotacao;
    private $valor;
    
    function getIdplan() {
        return $this->idplan;
    }

    function getAno() {
        return $this->ano;
    }

    function getMes() {
        return $this->mes;
    }

    function getDia() {
        return $this->dia;
    }

    function getConta() {
        return $this->conta;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getGrau() {
        return $this->grau;
    }

    function getNatureza() {
        return $this->natureza;
    }

    function getTplanca() {
        return $this->tplanca;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getEstado() {
        return $this->estado;
    }

    function getDotacao() {
        return $this->dotacao;
    }

    function getValor() {
        return $this->valor;
    }

    function setIdplan($idplan) {
        $this->idplan = $idplan;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setMes($mes) {
        $this->mes = $mes;
    }

    function setDia($dia) {
        $this->dia = $dia;
    }

    function setConta($conta) {
        $this->conta = $conta;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setGrau($grau) {
        $this->grau = $grau;
    }

    function setNatureza($natureza) {
        $this->natureza = $natureza;
    }

    function setTplanca($tplanca) {
        $this->tplanca = $tplanca;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setDotacao($dotacao) {
        $this->dotacao = $dotacao;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }


}
