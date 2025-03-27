<!DOCTYPE html>
<html>
    <head>
        <?php require('model/initialize.php'); ?>
    </head>
    <?php require('model/practice_guess.php') ?>
    <body>
      <?php
         include('view/header.php');
         require('model/check_guess.php');
      ?>
      <main>
            <?php include('view/game_guess.php'); ?>
            <?php include('view/previous_guess.php'); ?>
      </main>
      <?php include('view/popup.php'); ?>
    </body>
</html>

