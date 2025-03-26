<main>
    <div id="target" style="background-color: #<?php echo $target ?>">
        <h2>TARGET</h2>

    </div>
    <div id="guess" style="background-color: #<?php echo $guess ?>">
        <h2>GUESS</h2>
        <p style="color: #ffffff"><?php echo $target ?></p>

    </div>
    <form>
        <label for="guess" action="index.php?guess=<?php echo $guess?>">GUESS: #</label>
        <input type="text" id="text" name="guess" value=<?php echo $guess ?> maxlength="6" minlength="6">
        <input type="submit" id="submit" value="Submit">
    </form>
    <div id="previous">
        <h2>PREVIOUS GUESS</h2>
        <ul>
            <li><h1>#</h1></li>
            <li><h1 class="previous_digit">F</h1></li>
            <li><h1 class="previous_digit">F</h1></li>
            <li><h1 class="previous_digit">F</h1></li>
            <li><h1 class="previous_digit">F</h1></li>
            <li><h1 class="previous_digit">F</h1></li>
            <li><h1 class="previous_digit">F</h1></li>
        </ul>
    </div>
</main>