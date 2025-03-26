<div id="mainDiv">
    <div class="mainColors" style="background-color: #<?php echo $_COOKIE['target'] ?>">
            <h2>TARGET</h2>
        </div>
    <div class="mainColors" style="background-color: #<?php echo $guess ?>">
        <h2>GUESS</h2>
    </div>
</div>

<form>
    <label for="guess" action="index.php?guess=<?php echo $guess?>">GUESS: #</label>
    <input type="text" id="text" name="guess" value="<?php echo $guess ?>" maxlength="6" minlength="6">
    <input type="submit" id="submit" value="Submit">
</form>