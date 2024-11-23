<?php
if ($_REQUEST) {
    @session_start();
    @session_destroy();
    @session_abort();
    header('location:../login.php?cod=expired');
}