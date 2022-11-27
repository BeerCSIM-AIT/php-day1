<?php
    $height = 120;
    $price = 0;
    if($height>120){ //relational operator < <= > >= == !=
        $price = 399;
    } else{
        $price = 198;
    }

    if($height==120){  // if(120)
        $price = 0;
    }

    echo "Price: $price";
?>