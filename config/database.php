<?php
/*
 * File: Database configuration
 */

// database connection variables
define('HOST', 'localhost');
define('USER', 'personal_page');
define('PASSWORD', 'personal_page@x');
define('DATABASE', 'personal_page');

function DB() {
    try {
        $db = new PDO('mysql:host='.HOST.';dbname='.DATABASE.'', USER, PASSWORD);
        return $db;
    } catch (PDOException $e) {
        return "Error!: " . $e->getMessage();
        die();
    }
}

?>