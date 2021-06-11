<?php

//XSS対策
function h($value){
 return htmlspecialchars($value,ENT_QUOTES);
}

?>