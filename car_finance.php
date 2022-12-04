<?php
    $car_price = 600000;
    $i_rate = 0.015;
    $period = 12000;
    for($m=1;$m<=300;$m++){
        $interest = ($car_price * $i_rate);
        $capital = $period - $interest;
        $car_price -= $capital;

        $str_capital = number_format($capital,2);
        $str_interest = number_format($interest,2);
        $str_balance = number_format($car_price,2);

        echo "งวดที่ $m: เงินต้น: $str_capital ดอกเบี้ย: $str_interest คงเหลือ: $str_balance<br>";
        if($car_price<0){
            break;
        }
    }
    echo "จำนวนงวดที่ต้องผ่อน : $m";
?>