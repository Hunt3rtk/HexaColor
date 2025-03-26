<?php
function check_digit($guess_digit, $target_digit): string {
    $guess_dec = hexdec($guess_digit);
    $target_dec = hexdec($target_digit);
    
    if ($guess_digit === $target_digit) {
        return 'correct';
    } else if (abs($guess_dec - $target_dec) <= 2) {
        return 'close';
    }
    return 'incorrect';
}

function check_guess($guess, $target): array {
    $results = [];
    
    // Split the hex strings into individual digits
    $guess_digits = str_split($guess);
    $target_digits = str_split($target);
    
    // Check each digit
    for ($i = 0; $i < 6; $i++) {
        $results[] = check_digit($guess_digits[$i], $target_digits[$i]);
    }
    
    return $results;
}
?>