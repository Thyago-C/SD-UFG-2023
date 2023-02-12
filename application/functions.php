<?php

function validaSessao(){

    session_start();

    //Setando as variáveis que computam o tempo de sessão;
    $tempo = $_SERVER['REQUEST_TIME'];
    $duracao = 3600;

    if(isset($_SESSION['LAST_ACTIVITY']) && ($tempo - $_SESSION['LAST_ACTIVITY']) > $duracao){

        session_unset();
        session_destroy();
        header('location:../curador.php');

    }

    $_SESSION['LAST_ACTIVITY'] = $tempo;
    
}

?>