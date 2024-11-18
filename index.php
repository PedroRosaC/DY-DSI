<?php
require_once './shared/header.php';
@$cod = $_REQUEST['cod'];
if (isset($cod)) {
    if ($cod == 'expired') {
        echo ('<br><div class="alert alert-danger">');
        echo ('Sua Sessão expirou, logue novamente');
        echo ('</div>');
    }
    if ($cod == 'error') {
        echo ('<br><div class="alert alert-danger">');
        echo ('login e/ou senha inválidos!');
        echo ('</div>');
    }
    if ($cod == 'fail') {
        echo ('<br><div class="alert alert-warning">');
        echo ('Preencha os dados corretamente!');
        echo ('</div>');
    }
    if ($cod == 'SuccessCad') {
        echo ('<br><div class="alert alert-success">');
        echo ('Cliente cadastrado com sucesso!');
        echo ('</div>');
    }
}
?>
<h1 class="mt-5">Login</h1>
<form method="post" action="controller/loginController.php">
    <div class="mb-3">
        <label for="username" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Login">
        <input type="reset" class="btn btn-danger" value="Limpar campos">
    </div>
    <a href="cadastro.php">Não tem uma conta? Clique aqui!</a>
</form>
<?php
require_once './shared/footer.php';
?>