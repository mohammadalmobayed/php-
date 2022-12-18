<?php

// date_default_timezone_set('America/New_York');

// // Convert a string to a Date object
// $date_string = '2022-12-18';
// $date = new DateTime($date_string);

// // Convert a string to a DateTime object
// $datetime_string = '2022-12-18 12:34:56';
// $datetime = new DateTime($datetime_string);

// // Print the resulting Date and DateTime objects
// echo "Date: " . $date->format('Y-m-d') . "\n";
// echo "DateTime: " . $datetime->format('Y-m-d H:i:s') . "\n";
// ?>
<?php
$dateString = '12-08-2004';
$date = DateTime::createFromFormat('d-m-Y', $dateString);
echo $date->format('Y-m-d');
echo "<br>";
$dateTime = new DateTime('12-08-2004');
echo $dateTime->format('Y-m-d H:i:s');
?>