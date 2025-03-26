<?php require('check_guess.php'); ?>
<main>
    <div id="mainDiv">
        <div class="mainColors" style="background-color: #<?php echo $_COOKIE['target'] ?>">
                <h2>TARGET</h2>
            </div>
        <div class="mainColors" style="background-color: #<?php echo $_COOKIE['guess'] ?>">
            <h2>GUESS</h2>
        </div>
    </div>

    <form>
        <label for="guess" action="index.php?guess=<?php echo $_COOKIE['guess']?>">GUESS: #</label>
        <input type="text" id="text" name="guess" value=<?php echo $_COOKIE['guess'] ?> maxlength="6" minlength="6">
        <input type="submit" id="submit" value="Submit">
    </form>
    <div id="previous">
        <h2>PREVIOUS GUESSES</h2>
        <?php foreach ($_COOKIE['previous_guesses'] as $prev_guess): ?>
            <?php $results = check_guess(); ?>
            <ul style="background-color: #<?php echo $prev_guess; ?>">
                <!-- TODO: change from looping over results[i] implement a way to store the correct, close and incorrect for each previous_guesses -->
                <?php $target_digits = str_split($_COOKIE['target']); ?>
                <?php $guess_digits = str_split($prev_guess); ?>

                <?php for($i = 0; $i < 6; $i++): 
                    $results[] = check_digit($guess_digits[$i], $target_digits[$i]);
                ?>
                    <li class="<?php echo $results[$i]; ?>">
                        <?php echo $prev_guess[$i]; ?>
                    </li>
                <?php endfor; ?>
            </ul>
        <?php endforeach; ?>
    </div>
</main>