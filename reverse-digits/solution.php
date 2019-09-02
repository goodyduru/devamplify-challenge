<?php
    function reverse_digits($number) {
        $answer = 0;
        $is_negative = FALSE;
        if ( $number < 0 ) {
            $is_negative = TRUE;
        }
        $number = abs($number);
        while ( $number > 0 ) {
            $pop = $number % 10;
            $answer = $answer * 10 + $pop;
            $number = floor($number/10);
        }

        if ( $is_negative ) {
            $answer = 0 - $answer;
        }
        return $answer;
    }

    assert(reverse_digits(234) == 432, "Reverse of 234 should be 432");
    assert(reverse_digits(12003) == 30021, "Reverse of 12003 should be 30021");
    assert(reverse_digits(-2198) == -8912, "Reverse of -2198 should be -8912");
?>