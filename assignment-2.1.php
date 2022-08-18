
<?php
    function evaluate($name,$attendence,$hygiene,$rating)
            {
                if($attendence<80 || $hygiene<50 || $rating<2)
                {
                    echo $name , "You are fired from the Rojan krina Passal!<br>";
                }
                else
                {
                    echo "Not fired for now..<br>";
                }
            }
     evaluate("Saugat Silwal", 79, 45, 3);
?>