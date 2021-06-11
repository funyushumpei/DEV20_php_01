<?php

$CPU = rand(0,2);
$Player = $_SESSION["hand"];
$result = ($CPU - $Player + 3) % 3;

if($result == 0){
    echo "あいこ";
    echo '<img src="img/yaghan_zoku.png" alt="">';
}else if($result == 1){
    echo "まけ";
    echo '<img src="img/ai_pet_family.png" alt="">';
}else if($result == 2){
    echo "かち";
    echo '<img src="img/supuer_nihonjin.png" alt="">';
}


?>