<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $user = 'Melissa';
    $pass = '2209';

    if(($usuario == $user) && ($senha == $pass)){
        //echo "OK validado";
        session_start();
        $_SESSION['username'] = $usuario;
        $_SESSION['logado'] = 1;
        header("Location: restrita.php");
    }
    else{
        echo "Acesso negado!!";
    }



?>