<?php
    $DaysOfWeek = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    $count = 0;
    do{
        echo "<h4>$DaysOfWeek[$count]</h4>";
        $count++;
    }while ($count < 7);
    var_dump($DaysOfWeek);
?>