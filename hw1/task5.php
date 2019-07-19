<?php
$bmw = array('X5', 120, 5, '2015');
$toyota = array('Camry', 100, 5, '2017');
$opel = array('Cadet', 90, 3, '2001');

$cars['bmw'][0] = $bmw;
$cars['toyota'][0] = $toyota;
$cars['opel'][0] = $opel;

foreach($cars as $key => $value) {
    echo "CAR ", $key,
    "<br />", implode(' ', $value[0]), "<br /><br />";
}