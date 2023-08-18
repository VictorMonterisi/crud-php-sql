<?php

    // Configurações de local, login e BD utilizado
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro');

    // Conexão
    $conn = new MySQLi(HOST,USER,PASS,BASE);