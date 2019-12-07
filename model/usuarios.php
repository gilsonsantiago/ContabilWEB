<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarios
 *
 * @author Gilson
 */
class usuarios {
    private $id;
    private $nome;
    private $usuario;
    private $senha;
    private $estado;
    private $nivel;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEstado() {
        return $this->estado;
    }

    function getNivel() {
        return $this->nivel;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
    }


}
