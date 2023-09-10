<?php
if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
    header('Content-Disposition: attachment; filename="gambar.jpg"');
    header('Content-Type: image/jpeg');
    readfile(__DIR__ . '/file/gambar.png');
    exit();
} else {
    echo 'gagal';
}
