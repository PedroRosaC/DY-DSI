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
                        echo '<tr>
                        <th>
                                <h3 >Meta:</h3>
                                <p>Nome: ' . $value['nome'] . '</p><br>
                                <p>Data: ' . $value['data'] . '</p>
                                <br>
<<<<<<< HEAD
                                <p>Status:<a class="button link" href="controller/metasController.php?cod=concluir&&id=' . $value['id'] . '">Concluir</a> </p>
                              </th>1
=======
                                <span>Status:<a class="button link" href="controller/metasController.php?cod=concluir&&id=' . $value['id'] . '">Concluir</a> </span>
                              </th>
>>>>>>> 5ad18bfc03078f4d047e39a56304b0c15534ff50
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
                        echo '<tr >
                        <th>
                                <h3>Meta:</h3>
                                <p>Nome: ' . $value['nome'] . '</p>
                                <p>Data: ' . $value['data'] . '</p>
                                <p>Status: <img width="20px" heigth="40px" src="resources/img/check.png" alt=""></p>
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
            <h3>Tarefas</h3>
            <div class="places">
                <div class="place">
                    
                    <table style="width:80%; color:white;">
                        
                        <tr>
                            <h3>Tarefas por concluir</h3>
                        </tr>
                        <?php
                        require_once './controller/tarefasController.php';
                        $tarefaList0 = loadAllStatus0();
                        foreach ($tarefaList0 as $key => $value) {
                            echo '<tr>
                            <th>
                                    <h3  >Tarefa:</h3>
                                    <p> Nome: ' . $value['nome'] . '</p>
                                    <p>Data: ' . $value['descricao'] . '</p>
                                    <p>Status:<a  class="button link" href="controller/tarefasController.php?cod=concluir&&id=' . $value['id'] . '">Concluir</a> </p>
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
                            echo '<tr>
                            <th>
                                    <h3>Tarefa:</h3>
                                    <p>Nome: ' . $value['nome'] . '</p>
                                    <p>Data: ' . $value['descricao'] . '</p>
                                    <p>Status: <img width="20px" heigth="40px" src="resources/img/check.png" alt=""></p>
                                    <a class="button link" href="controller/tarefasController.php?cod=deletar&&id=' . $value['id'] . '">Deletar</a>
                                    </th>
                                </tr>';
                        } ?>
                    </table>
                </div>
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