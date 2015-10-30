<?php

$hello = "hello wolrd!";
function is small($a, $b){
if($a < $b){
return true;
}else{
return false;
}
}

$val1 = 20;
$val2 = 30;

if(is_small($val1, $val2)){
echo "\$val1は\$val2より小さい\n";
}else{
echo "\$val2は\$val2と等しいか大きい\n";
}
?>
