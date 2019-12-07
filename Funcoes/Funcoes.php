<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// decodadata("2019-11-23");

function decodadata($data) {
    
    $alista = explode ("-", $data) ;
    
    list($dia, $mes, $ano) = $alista;
     
    $dataatual = new DateTime ($ano.'-'.$mes.'-'.$dia);

    return $dataatual->format("d/m/Y");
    
    
}


// encodadata("23/11/2019");

function  encodadata($data1){
   
    $alista = explode ("/", $data1) ;
    
    list($dia, $mes, $ano) = $alista;
       
    $dataatua2 = new DateTime($ano.'-'.$mes.'-'.$dia);
    
    return $dataatua2->format("Y-m-d");
    
}