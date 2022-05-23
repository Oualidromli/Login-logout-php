<?php 

// $_SERVERR =  print_r($_SERVER);

$SERVER = ($_SERVER);

foreach ($SERVER as $key => $value) {

    echo '<pre>'; print_r("$key = $value<br>");
    ${$key}= $value;
    
}
?>