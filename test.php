<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
</head>
<body>
  <?php
    session_start();
    if (isset($_SESSION['country'])) {
      echo "<p>Вы живете в стране: " .  $_SESSION['country'] . "</p>";
    } else {
      echo "<p>У вас нет дома...</p>";
    }
  ?>
</body>
</html>