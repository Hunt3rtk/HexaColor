<link rel='stylesheet' href="style.css" >
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<script src="hex.js"></script>
<?php
    session_start();
    
    // Initialize target only if it's not set in session
    if (!isset($_COOKIE['target'])) {
        echo "<script>document.addEventListener('DOMContentLoaded', function() {
            let target = generate();
            document.cookie = 'target=' + target;
            window.location.reload(); // Reload once to ensure cookie is set
        });</script>";
    }
    
    if (!isset($_COOKIE['previous_guesses'])) {
        $_COOKIE['previous_guesses'] = array();
    }
    
    if (!isset($_COOKIE['guesses_remaining'])) {
        $_COOKIE['guesses_remaining'] = 6;
    }
?>