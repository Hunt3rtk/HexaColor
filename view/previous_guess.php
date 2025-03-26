<div id="previous">
    <h2>PREVIOUS GUESSES</h2>
    <?php foreach (array_reverse($_SESSION['previous_guesses']) as $prev_guess): ?>
        <ul style="background-color: #<?php echo $prev_guess; ?>">

            <?php $target_digits = str_split($_COOKIE['target']); ?>
            <?php $guess_digits = str_split($prev_guess); ?>
            
            <?php for($i = 0; $i < 6; $i++): ?>
                <li class="<?php echo check_digit($guess_digits[$i], $target_digits[$i]); ?>">
                    <?php echo $prev_guess[$i]; ?>
                </li>
            <?php endfor; ?>
        </ul>
    <?php endforeach; ?>
</div>