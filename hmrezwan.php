<?php

$d = "Donald";
$first=strlen($d);
$n = "Nicolas";
$second=strlen($n);
$j = "Jechinda";
$third = strlen($j);

$short_length = min($first,$second,$third);
$short_name = min($d,$n,$j);


echo "$short_length";

echo "<br>";

echo "$short_name";

echo "<br>";

if($short_length%2 ==0){
    echo $short_name.", "."You are General";
}else{
    echo $short_name.", "."You are Different.";
}



?>