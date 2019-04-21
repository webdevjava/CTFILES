<?php

$even = "";

for($i=1;$i<=20;$i++){
    if($i%2==0){
        $even .= $i.",";
    }
    
}

echo "The Even numbers within 1 to 20 are " .$even."<br>" ;


?>