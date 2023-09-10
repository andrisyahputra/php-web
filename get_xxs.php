<?php
// http://localhost:8080/get_xxs.php?nama=%3Cscript%3Ealert(%27Anda%20di%20hack%27)%3C/script%3E
// $say = "Hello " .  $_GET["nama"];
// untuk mencegah script menjadi text biasa
$say = "Hello " .  htmlspecialchars($_GET["nama"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $say ?></h1>


</body>

</html>