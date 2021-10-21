<?php
$today = date('Y-m-d');
for($i=1;$i<=30;$i++)
        {
        $avgmonth=date('Y-m-d', strtotime($today." -".$i." day"));
        echo $avgmonth;
        echo "<br>";
        }
?>
