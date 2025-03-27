<link rel='stylesheet' href="style.css" >
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

<?php
    session_start();

    // Generate new target if none exists
    if (!isset($_SESSION['target'])) {
        function generate() {
            $target = '';
            for ($i = 0; $i < 6; $i++) {
                $target .= dechex(rand(0, 15));
            }
            return $target;
        }

        $_SESSION['target']= generate();
    }
    
    // Initialize session variables if not set
    if (!isset($_SESSION['previous_guesses'])) {
        $_SESSION['previous_guesses'] = array();
    }
    
    if (!isset($_SESSION['guesses_remaining'])) {
        $_SESSION['guesses_remaining'] = 6;
    }
?>