<?php
@session_start();
if ($_POST) {
    @$id = $_POST['id'];
    require_once '../model/tarefasModel.php';
    $tarefa = new tarefaModel();
    if ($id != 0) {
        $tarefa->setId($id);
    }
    $tarefa->setNome($_POST['nome']);
    $tarefa->setStatus($_POST['status']);
    $tarefa->setDescricao($_POST['descricao']);
    $tarefa->setUsuarioId($_SESSION['id']);

    $total = $tarefa->save();
    if ($total > 0) {
        header('location:../page.php?cod=tasks&&situation=success');
    } else {
        header('location:../page.php?cod=tasks&&situation=error');
    }
}
if ($_REQUEST) {
    $cod = $_REQUEST['cod'];
    if ($cod == 'concluir') {
        @$id = $_REQUEST['id'];
        require_once '../model/tarefasModel.php';
        $tarefa = new tarefaModel();
        $tarefa->setUsuarioId($_SESSION['id']);
        $tarefa->setId($id);
        $tarefa->setStatus(1);

        $total = $tarefa->end();
        if ($total > 0) {
            header('location:../page.php?cod=tasks&&situation=success');
        } else {
            header('location:../page.php?cod=tasks&&situation=error');
        }
    } elseif ($cod == 'deletar') {
        @$id = $_REQUEST['id'];
        require_once '../model/tarefasModel.php';
        $tarefa = new tarefaModel();
        $tarefa->setUsuarioId($_SESSION['id']);
        $tarefa->setId($id);
        $total = $tarefa->delete();
        if ($total > 0) {
            header('location:../page.php?cod=tasks&&situation=success');
        } else {
            header('location:../page.php?cod=tasks&&situation=error');
        }
    }
}
function loadAllStatus0()
{
    require_once './model/tarefasModel.php';
    $tarefa = new tarefaModel();
    $tarefaList = $tarefa->loadAllStatus0();
    return $tarefaList;
}
function loadAllStatus1()
{
    require_once './model/tarefasModel.php';
    $tarefa = new tarefaModel();
    $tarefaList = $tarefa->loadAllStatus1();
    return $tarefaList;
}
