<?php

$date = date("Y-m-d");
echo "OLD $date<br>";

$newDate = convertDate($date);
echo "NEW $newDate\n";


function convertDate($date)
{
    $temp = explode("-", $date);
    $month = [
        "January",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "Novermber",
        "Desember",
    ];

    $numberMonth = (int)$temp[1];
    $temp[1] = $month[$numberMonth];
    $res = $temp[2] . " " . $temp[1] . " " . $temp[0];

    return $res;
}
