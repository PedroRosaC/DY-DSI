<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/x-icon" href="resources/img/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DYSCIPLINE</title>
    <link rel="stylesheet" href="resources/css/login.css">
    
</head>
<body>

<div class="container">

<h1>C<span style="color:blue;">a</span>dastro </h1>

<form action="./controller/usuarioController.php?cad=cadastro" method="POST">
    <?php
    require_once './controller/usuarioController.php';
    @$id = $_REQUEST['id'];
    @$usuario = loadById($id);
    ?>
    <input type="hidden" name="id" value="<?php echo @(isset($usuario)? $usuario->getId() : '0'); ?>">
    <div class="text">
        <label for="first_name" class="label">Nome</label>
        <input type="text" value="<?php echo @(isset($usuario) ? $usuario->getNome() : '') ?>" class="input" id="nome" name="nome" placeholder="Digite seu nome" required>
    </div>
    <div class="text">
        <label for="last_name" class="label">Email</label>
        <input type="email" value="<?php echo @(isset($usuario) ? $usuario->getEmail() : '') ?>"class="input" id="email" name="email" placeholder="Digite seu email" required>
    </div>
    <div class="text">
        <label for="phone" class="label">Senha</label>
        <input type="password" value="<?php echo @(isset($usuario) ? $usuario->getSenha() : '') ?>"class="input" id="senha" name="senha" placeholder="Digite sua senha">
    </div>
    <div class="text">
        <input href="/controller/usuarioController.php" type="submit" class="button" value="Cadastrar-se">
        <input type="reset" class="button" value="Limpar campos">
    </div>
    <br>
</form>
</div>

</div>


</body>

</html>