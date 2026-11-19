<?php
//Variabili x calcoli
$totale=0;
$sconto=0;
$totaleScont=0;
$przquad=0;
$przpen=0;
$przzaino=0;
$extra=0;

//Variabili x errori
$err1="";
$err2="";
$err3="";

$qtaquad=isset(is_numeric($_POST["quaderno"])) ? $_POST["quaderno"]: "ERR";
$qtapen=isset(is_numeric($_POST["penna"])) ? $_POST["penna"]: "ERR";
$qtazaino=isset(is_numeric($_POST["zaino"])) ? $_POST["zaino"]: "ERR";


if($qtaquad=="ERR"){
    $err1="ERRORE! Verifica il corretto inserimento della qta quaderni!"
}

if($qtapen=="ERR"){
    $err2="ERRORE! Verifica il corretto inserimento della qta penne!"
}

if($qtazaino=="ERR"){
    $err1="ERRORE! Verifica il corretto inserimento della qta zaini!"
}



$extra=isset($_POST["extra"]) ? $_POST["extra"] : array();

if(in_array("regalo")){
    $extra += 3
}
if(in_array("express")){
    $extra += 7
}




if ($qtaquad>0){
    $przquad += ($qtaquad*2.5) 
}
if ($qtapen>0){
    $przpen += ($qtapen*1.2)
}
if ($qtazaino>0){
    $przzaino += ($qtazaino*35)
}


$totale=$przquad+$przpen+$przzaino+$extra;
$sconto=isset($_POST["codice"]) ? $_POST["codice"] : "";





?>