<?php
$b=true; $c='a'; $s="ABC";
$a0=[];
$a1=array();

echo $a0;
echo PHP_EOL;
echo $a1;
echo PHP_EOL;

var_dump($a0);
var_dump($a1);

$a0=[1,2];

$a1=["ab","cde"];
var_dump($a0);
var_dump($a1);

/*
function xpto(){
    return array(
        "Inscritos" => $numeroDeInscritos,
    "homens" => $numeroDeHomens,
    "mulheres" => $numeroDeMulheres;
    "fulanoMaisAntigo" => $nomeDoMaisAntigo
    );
}
*/

$a2=[1,2,3,3.0,3.14, 'c',"Artur",true.false];
$a3=[1,2,3,3.0,3.14, 'c',"Artur",true.false,$a1];
var_dump($a2);
echo escreverArray_v2($a2);

echo PHP_EOL;
echo escreverArray_v2($a3,"; ");
echo PHP_EOL;
echo escreverArray_v3($a3,"; ");
/*
 * Quero seoparar com virgulas
 * quero que os boleanos apareçam true e false
 *
 * Recordar valores por defeito para parametros
 * Operadores relacionais em PHP
 */
function escreverArray_v2($a, $separador=", "){
    $ret="";
    $quantosElementos=count($a);
    for(
        $idx=0, $ret;
        $idx<$quantosElementos;
    $idx++
    ){
       $elementoDoMomento=$a[$idx];
        if (is_bool($elementoDoMomento)){
            $elementoDoMomento=$elementoDoMomento? "true":"false";
        }
        $ret.=$idx>0 ? $separador.$elementoDoMomento:$elementoDoMomento;
    }
    return $ret;
}//escreverArray_v1

function escreverArray_v1($a){
    $ret="";
    $quantosElementos=count($a);
    for(
        $idx=0, $ret;
        $idx<$quantosElementos;
        $idx++
    ){
        $elementoDoMomento=$a[$idx];

        $ret.="".$elementoDoMomento;
    }
    return $ret;
}//escreverArray_v1

function escreverArray_v3($a, $separador=", "){
    $ret="";
    $quantosElementos=count($a);
    for(
        $idx=0, $ret;
        $idx<$quantosElementos;
        $idx++
    ){
        $elementoDoMomento=$a[$idx];
        if (is_bool($elementoDoMomento)){
            $elementoDoMomento=$elementoDoMomento? "true":"false";
        }
        //Recursividade
        if(is_array($elementoDoMomento)){
            $elementoDoMomento=escreverArray_v3($elementoDoMomento,$separador);
        }
        $ret.=$idx>0 ? $separador.$elementoDoMomento:$elementoDoMomento;
    }
    return $ret;
}//escreverArray_v1

Esta alteração foi feita


?>