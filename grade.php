<?php
    $score = 77;
    if($score>=80){
        $grade="A";
    } else if($score>=70){
        $grade="B";
    } 
    //others
    else{
        $grade="F";
    }

    echo "Score: $score<br>Grade: $grade";
?>