<?php

if (!isset($_GET['nama']) || $_GET('nama') == "") {
    http_response_code(400);
    echo "Nama tidak ada";
    exit();
}

$say = "hello " . htmlspecialchars($_GET['nama']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Validator</title>
</head>

<body>
    <h1><?= $say ?></h1>
</body>

</html>