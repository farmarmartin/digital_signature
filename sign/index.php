<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: darkslategray; text-align: center">
<?php
if (isset($_POST['submit'])) {
    include 'dat/dbh.php';
    include 'dat/signature.php';
    header('Location: ' . $_SERVER['PHP_SELF']);
    }
?>


<form action="dat/form_data.php" method="POST">
        <input type="text" name="firstname" placeholder="name">
        <br>
        <input type="text" name="surname" placeholder="surname">
        <br>
        <input type="date" name="expire" placeholder="date of expiration">
        <br>
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>

