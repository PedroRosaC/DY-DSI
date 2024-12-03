<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="resources/img/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DYSCIPLINE</title>
    
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    <script src="resources/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <div class="header">
        <div class="content-header">
            <a href="home.php" class="link">D<span style="color:blue;" >Y</span>SCIPLINE</a>
            <a href="" class="link">Página Inicial</a>
            <?php
            @session_start();
            if (isset($_SESSION['login'])) {
                echo '<a class="link" href="./cadastro.php?user=edit&id=' . $_SESSION['login'] . '">Atualizar cadastro</a>';
            }
            ?>
            <a href="controller/logoutController.php?cmd=logout" class="link exit">Sair</a>
        </div>
    </div>
       