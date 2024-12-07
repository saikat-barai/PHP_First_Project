<?php
define("FACTOR", 9/5);
define("OFFSET", 32);

echo "Enter a temperature value: ";
$tempature = (float)readline();

echo "Convert to (1: Fahrenheit, 2: Celsius): ";
$choice = (int)readline();

switch ($choice) {
    case 1:
        $resut = $tempature * FACTOR + OFFSET;
        echo "Temperature in Fahrenheit: $resut";
        break;
    case 2:
        $resut = ($tempature - OFFSET) / FACTOR;
        echo "Temperature in Celsius: $resut";
        break;
    default:
        echo "Invalid choice.";
}