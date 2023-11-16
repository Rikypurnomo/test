<?php
$number = 1225441;

$numberString = (string)$number;
$length = strlen($numberString);

for ($i = 0; $i < $length; $i++) {
    $factor = pow(10, $length - $i - 1);
    
    $result = $numberString[$i] * $factor;
    
    if ($result != 0) {
        echo $result . PHP_EOL;
    }
}
?>
