<?php
require_once './shared/header.php';
?>
<br>
<h1>Cadastro de usuários</h1>
<form action="./controller/usuarioController.php?cad=cadastro" method="POST">
    <?php
    require_once './controller/usuarioController.php';
    @$id = $_REQUEST['id'];
    @$usuario = loadById($id);
    ?>
    <input type="hidden" name="id" value="<?php echo @(isset($usuario)? $usuario->getId() : '0'); ?>">
    <div class="mb-3">
        <label for="first_name" class="form-label">Nome</label>
        <input type="text" value="<?php echo @(isset($usuario) ? $usuario->getNome() : '') ?>" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
    </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">Email</label>
        <input type="email" value="<?php echo @(isset($usuario) ? $usuario->getEmail() : '') ?>"class="form-control" id="email" name="email" placeholder="Digite seu email" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Senha</label>
        <input type="password" value="<?php echo @(isset($usuario) ? $usuario->getSenha() : '') ?>"class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
    </div>
    <input href="/controller/usuarioController.php?cad=cadastro" type="submit" class="btn btn-primary" value="Cadastrar-se">
    <input type="reset" class="btn btn-danger" value="Limpar campos">
    <br>
</form>

<?php
require_once './shared/footer.php';
?>