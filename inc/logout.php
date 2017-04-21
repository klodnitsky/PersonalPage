<?php
/*
 * File: Logout
 */

// start session
session_start();

// destroy user session
unset($_SESSION['user_id']);

// redirect to index.php page
header("Location: ../index.php");
?>