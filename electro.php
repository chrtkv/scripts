<?php

function calculate($day, $night)
{
	$daySum = $day * 3.67;
	$nightSum = $night * 2.13;
	return $daySum + $nightSum;
}

$dayPrevious = readline("Previous day: ");
$nightPrevious = readline("Previous night: ");

$day = readline("Day: ");
$night = readline("Night: ");

print_r(calculate($day - $dayPrevious, $night - $nightPrevious) . "\n");
