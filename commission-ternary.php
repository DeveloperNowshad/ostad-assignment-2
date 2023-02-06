<?php
$tuition=20000;


  $commission = $tuition >= 20000 ? $tuition * 0.25 : ($tuition >= 10000 ? $tuition * 0.2 :  ($tuition >= 7000 ? $tuition * 0.15 : "commission did not found"));


echo "The commission is $commission";
?>