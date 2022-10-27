<?php

$startYear = 1901;
$endYear = 2016;

$yearsToCheck = range($startYear, $endYear);

foreach ($yearsToCheck as $year) {
    $isLeapYear = (bool) date('L', strtotime("$year-01-01"));

    printf(
        '%d %s a leap year %s',
        $year,
        $isLeapYear ? 'is' : 'is not',
        "<br>"
    );
}