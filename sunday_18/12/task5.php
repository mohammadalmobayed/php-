<?php
// $date1 = new DateTime('2022-12-18');
// $date2 = new DateTime('2021-12-18');

// $diff = $date1->diff($date2);

// echo $diff->format('%y years, %m months, %d days')."<br>";
?>
<?php
$startDate = new DateTime('1981-11-03');
$endDate = new DateTime('2013-09-04');

$interval = $startDate->diff($endDate);

$result = "Difference: " . $interval->y . " years, " . $interval->m . " months, " . $interval->d . " days";

echo $result;
?>