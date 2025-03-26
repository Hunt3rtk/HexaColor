<?php
    $guess = filter_input(INPUT_POST, "guess");
    if ($guess == NULL) {
        $guess = filter_input(INPUT_GET, "guess");
        if ($guess == NULL) {
            $guess = NULL;
        }
    }
    
    if ($guess !== NULL && $_SESSION['guesses_remaining'] > 0) {
        // Add guess to previous guesses and decrement guesses remaining
        array_push($_SESSION['previous_guesses'], $guess);
        $_SESSION['guesses_remaining']--;
        
        // Check if guess is correct or out of guesses
        if ($guess === $_COOKIE['target'] || $_SESSION['guesses_remaining'] === 0) {

            if ($guess === $_COOKIE['target']) {
                echo "<h1>CORRECT!</h1>";
            } else {
                echo "<h1>OUT OF GUESSES!</h1>";

            }

            // Reset game
            session_unset();
            setcookie('target', '', time() - 3600); // Delete the cookie
            header('Location: index.php');
        }
        
        // Keep only the last 6 guesses
        $_SESSION['previous_guesses'] = array_slice($_SESSION['previous_guesses'], -6);
    }
?>