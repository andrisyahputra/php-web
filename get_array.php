<?php
// http://localhost:8080/get_array.php?nomor[]=5&nomor[]=5&
$nomor = $_GET['nomor'];
$total = 0;
foreach ($nomor as $no) {
    $total += $no;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Total : <?= $total ?></h1>
</body>

</html>