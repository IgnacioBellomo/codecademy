<?php

// World traveler project from CodeCademy (First project)
// Currency exchange project

$riel = 2103942;
$kyat = 19092;
$krone = 109;
$lek = 9094;

echo "We started out with $riel riel, $kyat kyat, $krone krone, and $lek lek.";

// Conversion rates
$riel_to_dollar = 0.00025;
$kyat_to_dollar = 0.00068;
$krone_to_dollar = 0.11;
$lek_to_dollar = 0.0091;

// Dollars received in exchange for currencies
$dollars_from_riel = $riel * $riel_to_dollar;
$dollars_from_kyat = $kyat * $kyat_to_dollar;
$dollars_from_krone = $krone * $krone_to_dollar;
$dollars_from_lek = $lek * $lek_to_dollar;

echo "\nI received $dollars_from_riel dollars from my $riel riel, 
$dollars_from_kyat dollars from my $kyat kyat, 
$dollars_from_krone dollars from my $krone krone, and 
$dollars_from_lek.dollars from my $lek lek.";

// $1 fee per conversion
$dollars_from_riel -= 1;
$dollars_from_kyat -= 1;
$dollars_from_krone -= 1;
$dollars_from_lek -= 1;

$final_amount = $dollars_from_riel + $dollars_from_kyat + $dollars_from_krone + $dollars_from_lek;
echo "In total, I received $final_amount dollars for all of my currencies.";