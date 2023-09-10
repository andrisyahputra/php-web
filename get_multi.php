<?php
// http://localhost:8080/get_multi.php?awal=andri&akhir=syahputra
$say = "Hello " .  $_GET["awal"] . " " . $_GET["akhir"]; ?>
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