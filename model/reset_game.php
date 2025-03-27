<?php

session_start();
// Clear all session variables
session_unset();

// Redirect to index.php
header('Location: ../index.php');
exit();
?>