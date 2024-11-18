<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dyscipline</title>
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    <script src="resources/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="align-items-center" style="width: 100%; text-align: center;">
            <img src="resources/img/offsina_logo.png">
        </div>
        <nav>
            <?php
            @session_start();
            if (isset($_SESSION['login'])) {
                echo '<nav class="nav justify-content-center h4">
                <a class="nav-link" href="controller/logoutController.php?cmd=logout">Logout</a>
                <a class="nav-link" href="./cadastro.php?user=edit&id=' . $_SESSION['login'] . '">Atualizar cadastro</a>
                </nav>';
            }
            ?>
        </nav>
        <main>