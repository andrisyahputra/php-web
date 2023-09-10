<?php
session_start();
session_destroy();

header('Location: /php-web-pzn/session/login.php');
exit();
