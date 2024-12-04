<?php
require_once './shared/header.php';
require_once 'controller/autenticationController.php';

?>
<div class="places">

    <div class="place">
        <h3>M<span style="color:blue;">i</span>nhas T<span style="color:blue;">a</span>refas D<span style="color:blue;">i</span>árias</h3>
        <a class="link" href="page.php?cod=tasks">Tarefas</a>
        <form method="post" action="controller/tarefasController.php">
            <input type="hidden" name="usuario_id" value="<?php @session_start();
                                                            $_SESSION['id'] ?>"><!--usuairo id -->
            <input type="hidden" name="status" value="0"><!--status -->
            <div class="text"><!--nome -->
                <label for="nome" class="label">Nome:</label>
                <input type="text" value="" class="input" id="nome" name="nome" placeholder="Digite o nome da meta" required>
            </div>
            <div class="text"><!--descricao -->
                <label for="descricao" class="label">descricao:</label>
                <input type="textarea" value="" class="input" id="descricao" name="descricao" placeholder="descrição" required>
            </div>
            <div class="text">
                <input type="submit" class="button" value="Criar Tarefa">
                <input type="reset" class="button" value="Limpar campos">
            </div>
        </form>
    </div>
    <div class="place">
        <h3>M<span style="color:blue;">i</span>nhas m<span style="color:blue;">e</span>tas</h3>
        <a class="link" href="page.php?cod=goals">Metas</a>
        <form method="post" action="controller/metasController.php">
            <input type="hidden" name="usuario_id" value="<?php @session_start();
                                                            $_SESSION['id'] ?>"><!--usuairo id -->
            <input type="hidden" name="status" value="0"><!--status -->
            <div class="text"><!--nome -->
                <label for="nome" class="label">Nome:</label>
                <input type="text" value="" class="input" id="nome" name="nome" placeholder="Digite o nome da meta" required>
            </div>
            <div class="text"><!--prioridade -->
                <label for="prioridade" class="label">Urgência:</label>
                <input type="number" value="" class="input" id="prioridade" name="prioridade" placeholder="Diga o quão urgente é esta meta" required>
            </div>
            <div class="text"><!--data -->
                <label for="data" class="label">Data:</label>
                <input type="date" value="" class="input" id="data" name="data">
            </div>
            <div class="text">
                <input type="submit" class="button" value="Criar Meta">
                <input type="reset" class="button" value="Limpar campos">
            </div>
        </form>
    </div>
    <div style="border: 1px solid blue;" class="place">
        <h3>C<span style="color:blue;">a</span>lendário P<span style="color:blue;">e</span>ssoal</h3>
        <a class="link" href="page.php?cod=calendar">Calendario</a>
    </div>
    <div class="place">
        <h3>C<span style="color:blue;">r</span>iação de P<span style="color:blue;">r</span>ojetos</h3>
        <a class="link" href="page.php?cod=project">Projetos</a>
    </div>
</div>

<?php
require_once './shared/footer.php';
?>