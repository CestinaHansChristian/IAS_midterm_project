<?php
    function generate_check_prime() {
        $number = rand(2,100);
        for ($i=2; $i < $number; $i++) { 
            if(($number % $i) == 0) {
                return generate_check_prime();
            }
        }
        return $number;
    }
    // generate_check_prime();
?>