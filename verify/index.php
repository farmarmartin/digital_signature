<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: darkslategray; text-align: center">

<form action="verification.php" method="POST">
<button type="submit" name="submit">submit</button>
</form>
<?php
if (isset($_POST['submit'])) {
    include 'verification.php';
    header('Location: ' . $_SERVER['PHP_SELF']);
    }
?>
</body>
</html>