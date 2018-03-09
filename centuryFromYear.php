/*
 *centuryFromYear
 *https://codefights.com/arcade/intro/level-1/egbueTZRRL5Mm4TXN
 *
 */

<?php
function centuryFromYear($year) {
    //$year_rounded = round($year,-2);
    $year_rounded = ceil($year/100);
    return $year_rounded;
}
