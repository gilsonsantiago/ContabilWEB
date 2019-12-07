<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompetenciaC
 *
 * @author Gilson
 */
class Competencia {
   
    private $reCg;
    private $ano;
    private $mes;
    private $dia;
    private $status;
    
    function getReCg() {
        return $this->reCg;
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

    function getStatus() {
        return $this->status;
    }

    function setReCg($reCg) {
        $this->reCg = $reCg;
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

    function setStatus($status) {
        $this->status = $status;
    }

   
    
}
