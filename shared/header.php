<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        

    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="icon" type="image/x-icon" href="resources/img/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DYSCIPLINE</title>

    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    <script src="resources/js/bootstrap.bundle.min.js"></script>

</head>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      initialDate: '2024-12-04',
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      selectable: true,
      events: [
        {
          title: 'Prova Fisica',
          start: '2024-12-03T13:00:00',
        },
        {
          title: 'Reunião Formatura',
          start: '2024-12-13T11:00:00',
          color: '#257e4a'
        },
        {
          title: 'Simulados',
          start: '2024-12-18',
          end: '2024-12-20'
        },
        {
          title: 'Aniversário Pai',
          start: '2024-12-29T20:00:00'
        },

        // areas where "Meeting" must be dropped
        {
          groupId: 'availableForMeeting',
          start: '2023-01-11T10:00:00',
          end: '2023-01-11T16:00:00',
          display: 'background'
        },
        {
          groupId: 'availableForMeeting',
          start: '2023-01-13T10:00:00',
          end: '2023-01-13T16:00:00',
          display: 'background'
        },

        // red areas where no events can be dropped
        {
          start: '2023-01-24',
          end: '2023-01-28',
          overlap: false,
          display: 'background',
          color: '#ff9f89'
        },
        {
          start: '2023-01-06',
          end: '2023-01-08',
          overlap: false,
          display: 'background',
          color: '#ff9f89'
        }
      ]
    });

    calendar.render();
  });

</script>

<body>
    <div class="header">
        <div class="content-header">
            <a href="home.php" class="link lato-light">D<span style="color:blue;">Y</span>SCIPLINE</a>
            <a href="home.php" class="link">Página Inicial</a>
            <?php
            @session_start();
            if (isset($_SESSION['login'])) {
                echo '<a class="link" href="./cadastro.php?user=edit&id=' . $_SESSION['login'] . '">Atualizar cadastro</a>';
            }
            ?>
            <a href="controller/logoutController.php?cmd=logout" class="link exit">Sair</a>
        </div>
    </div>
    <script src='resources/js/index.global.js'></script>