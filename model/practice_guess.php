<?php

    $guess = filter_input(INPUT_POST, "guess");
    if ($guess == NULL) {
        $guess = filter_input(INPUT_GET, "guess");
        if ($guess == NULL) {
            $guess = NULL;
        }
    }
    
    if ($guess !== NULL && $_SESSION['guesses_remaining'] > 0) {
        array_push($_SESSION['previous_guesses'], $guess);
        $_SESSION['guesses_remaining']--;
        
        if ($guess === $_SESSION['target'] || $_SESSION['guesses_remaining'] === 0) {
            $_SESSION['game_over'] = true;
            $_SESSION['won'] = ($guess === $_SESSION['target']);
        }
        
        $_SESSION['previous_guesses'] = array_slice($_SESSION['previous_guesses'], -6);
    }
?>