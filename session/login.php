<?php
session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    header('Location: /php-web-pzn/session/member.php');
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == "andri" && $_POST['password'] == 'andri') {
        // sukses
        $_SESSION['login'] = true;
        $_SESSION['username'] = $_POST['username'];
        header('Location: /php-web-pzn/session/member.php');
        exit();
    } else {
        $error = "Login gagal";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sesion</title>
</head>

<body>

    <?php if ($error != "") : ?>
        <h2><?= $error ?></h2>
    <?php endif; ?>


    <h1>Login</h1>
    <form method="post" action="">
        <label for="username">Username :
            <input type="text" name="username">
        </label>

        <br>

        <label for="password">Password :
            <input type="text" name="password">
        </label>

        <br>

        <input type="submit" value="Login">

    </form>
</body>

</html>