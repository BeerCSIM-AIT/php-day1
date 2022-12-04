<?php
    // for($i=2;$i<=50;$i+=2){     // shorthand $i = $i + 2
    //     echo "$i <br>";
    // }

    // for($i=50;$i>=1;$i-=2){     // shorthand $i = $i - 2
    //     echo "$i <br>";
    // }

    // ฝากเงิน 1000 บาท เอาไปฝากธนาคารเป็นเวลา 10 ปี  ธ. คิดดอกเบี้ย 1% ต่อปี
    // จงหาว่าเมื่อครบ 10 ปี จะมีเงินเท่าไหร่

    $money = 10000;
    $interest_rate = 0.05;
    $goal = 50000;
    $period = 1000;
    for($y=1;$y<=100;$y++){
        $money = $money * (1 + $interest_rate);
        $money += $period;
        if($money>$goal){
            break;
        }
    }
    echo "ปีที่ $y จะมีเงินเก็บ $money";

//     for($y=1;$y<=10;$y++){
//         //คิดดอกเบี้ยจากเงินฝาก
//         // $money = $money + ($money * $interest_rate);
//         $money = $money * (1 + $interest_rate);
//         echo "ปีที่ $y: $money<br>";
//     }
// ?>