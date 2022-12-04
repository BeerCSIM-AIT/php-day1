<?php
    $i=1;
    do{
        if($i%7!=0){
            echo $i;
        }else{
            echo "?";
        }
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        if($i%5==0){
            echo "<br>";
        }
        $i++;
    }while($i<=50);

    echo "&nbsp;"

?>