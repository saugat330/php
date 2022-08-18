<?php
    function evaluate($name, $attendance, $hygiene, $rating)
    {
        if ($attendance < 80 && $hygiene < 50) {
            echo "$name, You are fired from Rojan Kirana Pasal";
        } else if ($hygiene < 50 && $rating < 2) {
            echo "$name, You are fired from Rojan Kirana Pasal";
        } else {
            echo "Not fired for now";
        }
    }


    evaluate("Saugat Silwal", 79, 45, 3);
?>
