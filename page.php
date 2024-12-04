<?php
require_once './shared/header.php';
?>

<div class="page">
    <?php
    $option = $_REQUEST['cod'];
    if ($option == 'goals') {
    ?>
        <div class="goals">
            <div class="place">
                <table style="width:80%; color:white;">
                    <tr>
                        <h3>Metas por concluir</h3>
                    </tr>
                    <?php
                    require_once './controller/metasController.php';
                    $metaList0 = loadAllStatus0();
                    foreach ($metaList0 as $key => $value) {
                        echo '<tr style="border:1px solid white">
                        <th>
                                <p>Meta:</p>
                                <span>Nome: ' . $value['nome'] . '</span><br>
                                <span>Data: ' . $value['data'] . '</span>
                                <br>
                                <span>Status:<a class="button link" href="controller/metasController.php?cod=concluir&&id=' . $value['id'] . '">Concluir</a> </span>
                              </th>1
                             </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="place">
                <table style="width:80%; color:white;">
                    <tr>
                        <h3>Metas concluidas</h3>
                    </tr>
                    <?php
                    require_once './controller/metasController.php';
                    $metaList1 = loadAllStatus1();
                    foreach ($metaList1 as $key => $value) {
                        echo '<tr style="border:1px solid white">
                        <th>
                                <p>Meta:</p>
                                <span>Nome: ' . $value['nome'] . '</span><br>
                                <span>Data: ' . $value['data'] . '</span><br>
                                <span>Status: <img width="20px" heigth="40px" src="resources/img/check.png" alt=""></span>
                                <a class="button link" href="controller/metasController.php?cod=deletar&&id=' . $value['id'] . '">Deletar</a>
                             </th>
                             </tr>';
                    } ?>
                </table>
            </div>
        </div>
    <?php
    } elseif ($option == 'calendar') {
        echo "<div class='goals'>
                    <div id='calendar-container'>
                        <div id='calendar'></div>
                    </div>
             </div>";
    } elseif ($option == 'tasks') {
    ?>
        <div class="goals">
            <div class="place">
                <table style="width:80%; color:white;">
                    <tr>
                        <h3>Tarefas por concluir</h3>
                    </tr>
                    <?php
                    require_once './controller/tarefasController.php';
                    $tarefaList0 = loadAllStatus0();
                    foreach ($tarefaList0 as $key => $value) {
                        echo '<tr style="border:1px solid white">
                        <th>
                                <p>Tarefa:</p>
                                <span>Nome: ' . $value['nome'] . '</span><br>
                                <span>Data: ' . $value['descricao'] . '</span>
                                <br>
                                <span>Status:<a class="button link" href="controller/tarefasController.php?cod=concluir&&id=' . $value['id'] . '">Concluir</a> </span>
                              </th>
                             </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="place">
                <table style="width:80%; color:white;">
                    <tr>
                        <h3>Tarefas concluidas</h3>
                    </tr>
                    <?php
                    require_once './controller/tarefasController.php';
                    $tarefaList1 = loadAllStatus1();
                    foreach ($tarefaList1 as $key => $value) {
                        echo '<tr style="border:1px solid white">
                        <th>
                                <p>Tarefa:</p>
                                <span>Nome: ' . $value['nome'] . '</span><br>
                                <span>Data: ' . $value['descricao'] . '</span><br>
                                <span>Status: <img width="20px" heigth="40px" src="resources/img/check.png" alt=""></span>
                                <a class="button link" href="controller/tarefasController.php?cod=deletar&&id=' . $value['id'] . '">Deletar</a>
                                </th>
                             </tr>';
                    } ?>
                </table>
            </div>
        </div>
    <?php
    } elseif ($option == 'project') {
    }
    ?>

</div>
<?php
require_once './shared/footer.php';
?>