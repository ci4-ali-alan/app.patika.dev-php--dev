<?php

function ucgen($sayi){ 
    for($i=1;$i&lt;=$sayi;$i++){ 
        $j=1; 
        while($j&lt;=$i){ 
            echo "o"; 
            $j+=1; 
        } 
        echo "<br />"; 
    } 
}