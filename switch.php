<?php
    $ticket_no = 1;
    switch($ticket_no){
        case 1:{
            $prize="Bicycle";
            break;
        }
        case 2:{
            $prize="Pan";
            break;
        }
        case 3: {
            $prize="Shoe";
            break;
        }
        case 4:{
            $prize="Noodle";
            break;
        }
        case 5:{
            $prize="Orange Juice";
            break;
        }
        default:{
            $prize="No prize";
        }
    }
    echo "Ticket: $ticket_no<br>";
    echo "Prize: $prize";
?>