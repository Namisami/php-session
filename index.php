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
    ?>
    <form method="POST">
        <label for="country">Введите свою страну</label>
        <input type="text" id="country" name="country">
        <input type="submit" value="Отправить" name="answer">
    </form>
    <a href="test.php">Переход на test.php</a>
    <?php
        if (isset($_POST["country"])) {
            $_SESSION["country"] = $_POST["country"];
        }
    ?>
</body>
</html>