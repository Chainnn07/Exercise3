<?php

$filename = 'Champagne.txt';

if (file_exists($filename)) {
    $file = file($filename);
    echo "File red as :<br>"; 
} else {
    echo "The file does not exist";
}

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo "File Contents: <br>". nl2br(htmlspecialchars($content)). "<br><br>";
}else {
    echo "File does not exist yet.<br><br>";
}

$data = "Appended data " ;

file_put_contents($filename, $data , FILE_APPEND);
echo "Appended .<br><br>";



?>













