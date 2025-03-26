
 <html>
    <head>
    <?php require('initialize.php'); ?>
    </head>
    <?php 
      $guess = filter_input(INPUT_POST,"guess");
      if ($guess == NULL) {
          $guess = filter_input(INPUT_GET,"guess");
          if ($guess == NULL) {
              $guess = 'ffffff';
          }
      }
    ?>
    <body>
      <?php
         include('view/header.php');
         include('view/guess.php');
         include('view/previous.php');
      ?>
    </body>
 </html>

