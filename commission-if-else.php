<?php
$tuition=20000;


if($tuition >=20000){
    //when tuituion fess is 20000 or above && commission rate is 25%
$commission= $tuition * .25;
echo "the commissionis {$commission}";
}elseif($tuition >=10000){
    //when tuituion fess is 10000 or above && commission rate is 20%
    $commission= $tuition * .20;
    echo "the commissionis {$commission}";
}elseif($tuition >=7000){
    //when tuituion fess is 7000 or above && commission rate is 15%
    $commission= $tuition * .15;
    echo "the commissionis {$commission}";
}

?>





