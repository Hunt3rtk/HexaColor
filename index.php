<html>
    <head>
    <?php require('initialize.php'); ?>
    </head>
    <?php 
      $_COOKIE['guess'] = filter_input(type: INPUT_POST, var_name: "guess");
      if ($_COOKIE['guess'] == NULL) {
          $_COOKIE['guess'] = filter_input(type: INPUT_GET, var_name: "guess");
          if ($_COOKIE['guess'] == NULL) {
              $_GUESS['guess'] = NULL;
          }
      }
      
      if ($_COOKIE['guess'] !== NULL && $_COOKIE['guesses_remaining'] > 0) {
          array_push($_COOKIE['previous_guesses'], $_COOKIE['guess']);
          
          // Check if guess is correct or out of guesses
          if ($_COOKIE['guess'] === $_COOKIE['target'] || $_COOKIE['guesses_remaining'] === 0) {
              // Reset game
              unset($_COOKIE['target']);
              $_COOKIE['previous_guesses'] = array();
              $_COOKIE['guesses_remaining'] = 6;
              setcookie('target', '', time() + 86400); // Delete the cookie in 1 day
              setcookie('previous_guesses', '', time() + 86400);
              setcookie('guesses_remaining', '', time() + 86400);
              setcookie('guess', '', time() + 86400);

          }
          
          // Keep only the last 6 guesses
          $_COOKIE['previous_guesses'] = array_slice(array: $_COOKIE['previous_guesses'], offset: 0, length: 6);
      }
    ?>
    <body>
      <?php
         include('view/header.php');
         include('view/guess.php');
      ?>
    </body>
 </html>

