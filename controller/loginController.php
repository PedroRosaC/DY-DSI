<?php
if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    require_once '../model/usuarioModel.php';
    $usuario = new usuarioModel();
    if (!empty($email) && !empty($senha)) {
        $total = $usuario->login($email, $senha);
        echo $total;
        if ($total > 0) {
            @session_start();
            $_SESSION['login'] = $usuario->getId();
            $_SESSION['nome'] = $usuario->getNome();
            echo 'login'.$_SESSION['login'];
          // header('location:../home.php');
        } else {
          //  header('location:../index.php?cod=error');
        }
    } else {
        //header('location:../index.php?cod=fail');
    }
}
