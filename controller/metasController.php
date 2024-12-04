<?php
@session_start();
if ($_POST) {
    @$id = $_POST['id'];
    require_once '../model/metasModel.php';
    $meta = new metaModel();
    if ($id != 0) {
        $meta->setId($id);
    }
    $meta->setNome($_POST['nome']);
    $meta->setStatus($_POST['status']);
    $meta->setPrioridade($_POST['prioridade']);
    $meta->setData($_POST['data']);
    $meta->setusuario_id($_SESSION['id']);

    $total = $meta->save();
    if ($total > 0) {
        header('location:../page.php?cod=goals&&situation=success');
    } else {
        header('location:../page.php?cod=goals&&situation=error');
    }
}
if ($_REQUEST) {
    $cod = $_REQUEST['cod'];
    if ($cod == 'concluir') {
        @$id = $_REQUEST['id'];
        require_once '../model/metasModel.php';
        $meta = new metaModel();
        $meta->setusuario_id($_SESSION['id']);
        $meta->setId($id);
        $meta->setStatus(1);

        $total = $meta->end();
        if ($total > 0) {
            header('location:../page.php?cod=goals&&situation=success');
        } else {
            header('location:../page.php?cod=goals&&situation=error');
        }
    } elseif ($cod == 'deletar') {
        @$id = $_REQUEST['id'];
        require_once '../model/metasModel.php';
        $meta = new metaModel();
        $meta->setusuario_id($_SESSION['id']);
        $meta->setId($id);
        $total = $meta->delete();
        if ($total > 0) {
           header('location:../page.php?cod=goals&&situation=success');
        } else {
            header('location:../page.php?cod=goals&&situation=error');
        }
    }
}
function loadAllStatus0()
{
    require_once './model/metasModel.php';
    $meta = new metaModel();
    $metaList = $meta->loadAllStatus0();
    return $metaList;
}
function loadAllStatus1()
{
    require_once './model/metasModel.php';
    $meta = new metaModel();
    $metaList = $meta->loadAllStatus1();
    return $metaList;
}
