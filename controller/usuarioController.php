<?php

if ($_POST) {
    $id = $_POST['id'];
    require_once '../model/usuarioModel.php';
    $usuario = new usuarioModel();
    if ($id != 0) {
        $usuario->setId($id);
    }
    $usuario->setNome($_POST['nome']);
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);
    $total = $usuario->save();
    if ($total > 0) {
        header('location:../index.php?cod=SuccessCad');
    } else {
        header('location:../index.php?cod=ErrorCad');
    }
}
function loadById($id)
{
    require_once './model/usuarioModel.php';
    $usuario = new usuarioModel();
    @$usuario = $usuario->loadById($id);
    return $usuario;
}
