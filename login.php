<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="resources/css/login.css">
    <link rel="icon" type="image/x-icon" href="resources/img/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DYSCIPLINE</title>
    
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    <script src="resources/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

<?php
@$cod = $_REQUEST['cod'];
if (isset($cod)) {
    if ($cod == 'expired') {
        echo ('<br><div class="error">');
        echo ('Sua Sessão expirou, logue novamente');
        echo ('</div>');
    }
    if ($cod == 'error') {
        echo ('<br><div class="error">');
        echo ('login e/ou senha inválidos!');
        echo ('</div>');
    }
    if ($cod == 'fail') {
        echo ('<br><div class="aviso">');
        echo ('Preencha os dados corretamente!');
        echo ('</div>');
    }
    if ($cod == 'SuccessCad') {
        echo ('<br><div class="success">');
        echo ('Cliente cadastrado com sucesso!');
        echo ('</div>');
    }
}
?>
<div class="container">
<h1 class="mt-5">L<span style="color:blue;" >o</span>gin</h1>
    <form method="post" action="controller/loginController.php">
        <div class="text">
            <label for="username" class="label">Email</label>
            <input type="email" class="input" id="email" name="email" placeholder="Digite seu email">
        </div>
        <div class="text">
            <label for="senha" class="label">Senha</label>
            <input type="password" class="input" id="senha" name="senha" placeholder="Digite sua senha">
        </div>
        <div class="text">
            <input type="submit" class="button submit" value="Login">
            <input type="reset" class="button" value="Limpar campos">
        </div>
        <a class="link" href="cadastro.php">Não tem uma conta? Clique aqui!</a>
    </form>
</div>


</body>

</html>