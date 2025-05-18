<?php

function capitalizeFLetter($studarray){
    foreach ($studarray as $studs):
        echo "Output: " . ucwords($studs) . "<br>";
    endforeach;
}

?>