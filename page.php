<?php
require_once './shared/header.php';
?>

<div class="page">
    <p>Minhas Metas (esse é o mais simples)</p>
    <div class="goals">
        <ul>
            <p>Lista de Metas</p>
            <li style="list-style: none;">
                <p>Tarefa 1:</p>
                <span>Fazer omelete com queijo</span>
                <button class="button">concluir</button>
            </li>
            <li style="list-style: none;">
                <p>Tarefa 2:</p>
                <span>Sexo putaria</span>
                <button class="button">concluir</button>
            </li>
        </ul>
        <ul>
            <p>Lista de Metas Cumpridas</p>
            <li style="list-style: none;">
                <p>Tarefa 1:</p>
                <span>Fazer omelete com queijo <img width="20px" heigth="40px" src="resources/img/check.png" alt=""></span>
            </li>
            <li style="list-style: none;">
                <p>Tarefa 2:</p>
                <span>Sexo putaria <img  width="20px" heigth="40px" src="resources/img/check.png" alt=""></span>
                
            </li>
        </ul>
    </div>
</div>


<?php
require_once './shared/footer.php';
?>