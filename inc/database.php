<?php

    mysqli_report(MYSQLI_REPORT_STRICT);

    define('db_host', 'localhost');
    define('username', 'root');
    define('password', '');
    define('db_name', 'db_ingressos');
    
    try {
        $conn = mysqli_connect(db_host, username, password, db_name);
    } catch (Exception $e) {
        die('Erro de conexão: ' . $e->getMessage());
    }