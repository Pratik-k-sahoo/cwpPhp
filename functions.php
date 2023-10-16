<?php

    echo "Welcome to php tut on functions";

    function processMark($markArray){
        $sum = 0;
        foreach($markArray as $mark){
            $sum += $mark;
        }

        return $sum;
    }

    $rohan = [95, 12, 45, 84, 26];
    $markSum = processMark($rohan);
    echo "Total marks secured by Rohan in 5 subjects is $markSum";

?>