<?php

/*
With this code snippet, you can print the first link from links with multiple images separated by commas.
*/

$imageText ="http://bdfjade.com/data/out/79/5848474-desktop-image.jpg,https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr4rgIBnlnTxEUGHBO_g0ve1iTTdCzOm9eYKDsX48YOrZ7S3AVVw";

$imagePath=explode (",",$imageText);

echo $imagePath[0];




/*
Get List Dates Between 2 Date.
*/

$startdate=strtotime(date('Y-m-d'));
$enddate=strtotime("+15 day", $startdate);

while ($startdate < $enddate) {
    
    echo "Date: ".date("d M", $startdate);
    echo "<br/>";
    echo "Day: ".date("l", $startdate);
    echo "<br/>";
        
    $startdate = strtotime("+1 day", $startdate);
} 
?>
