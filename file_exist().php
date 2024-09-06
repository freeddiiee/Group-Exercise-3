<?php
//PHP file exist function

$fileName = "doesnotexist.txt";
$filePath = "htdocs/"; 
$myFile = $filePath.$fileName; 

if (file_exists($myFile)) {
echo "$myFile exists.";
}

else {
echo "$myFile Sorry, this file does not exists.";
}
?>