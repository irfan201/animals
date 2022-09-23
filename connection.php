<?php

    define('HOST', '192.168.100.27');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'animals');

    $connection = mysqli_connect(HOST, USER, PASS, DB ) or die('unnable connect');
?>