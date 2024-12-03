<?php
require_once './shared/header.php';
require_once 'controller/autenticationController.php';

?>
<div class="places">
    
    <div class="place">
        <p>M<span style="color:blue;">i</span>nhas T<span style="color:blue;">a</span>refas D<span style="color:blue;">i</span>árias</p>
        <a href="page.php?cod=tasks">tarefas</a>
    </div>
    <div class="place">
        <p>M<span style="color:blue;">i</span>nhas m<span style="color:blue;">e</span>tas</p>
        <a href="page.php?cod=goals">Metas</a>
    </div>
    <div style="border: 1px solid blue;" class="place">
        <p>C<span style="color:blue;">a</span>lendário P<span style="color:blue;">e</span>ssoal</p>
        <a href="page.php?cod=calendar">Calendario</a>
    </div>
    <div class="place">
        <p>C<span style="color:blue;">r</span>iação de P<span style="color:blue;">r</span>ojetos</p>
        <a href="page.php?cod=project">Projetos</a>
    </div>
</div>

<?php
require_once './shared/footer.php';
?>