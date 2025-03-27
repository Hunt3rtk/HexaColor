<?php if (isset($_SESSION['game_over']) && $_SESSION['game_over']): ?>
    <div id="popup" class="popup">
        <div class="popup-content">
            <h2><?php echo $_SESSION['won'] ? 'Congratulations!' : 'Game Over!'; ?></h2>
            <p>
                <?php echo $_SESSION['won'] 
                    ? 'You guessed the color correctly!' 
                    : 'You ran out of guesses! The color was #' . $_SESSION['target']; ?>
            </p>
            <button onclick= "window.location='model/reset_game.php';">Try Another</button>
        </div>
    </div>
<?php endif; ?>