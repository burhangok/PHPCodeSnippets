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




/*
Find all ZIP Codes within Mile With Curl
*/
$curl=curl_init('https://www.zip-codes.com/zip-code-radius-finder.asp?sn=distance&so=asc&zip1='.$shop_pin_code.'&zipMilesLow=0&zipMilesHigh='.$far_mil.'&country=0&print=true');   
 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 
$data=curl_exec($curl);
 
$mathces=array();
 
preg_match_all("'<td class=a>(.*?)</td>'si", $data, $mathces);
 
$taskerzipCodes="";

$numberOfZipCodes = 0;
 
for($i = 1; $i < count($mathces[0],1) ;  $i += 8) {

$firstZipCode=$mathces[0][$i];

$taskerzipCodes.=",".strip_tags($firstZipCode);
$numberOfZipCodes+=1;
}


//echo $numberOfZipCodes;
 
curl_close($curl);

/* Find all ZIP Codes within Mile With Curl - END */



?>
