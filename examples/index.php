<?php
include __DIR__ . '/../autoload.php';

use lyhiving\arrays\arrays;

$arr = array('color' => array('blue', 'red', 'orange'), 'food' => array('cookie', 'bannner', 'milk'), 'music' => array('mp3', 'wav'), 'movie' => array('mp4' => 'one', 'flv' => 'twp'));
$new = arrays::filter($arr, array('music', 'movie'));
var_dump($new);

$new = arrays::to_sql($arr['color']);
var_dump($new);


$new = arrays::to_sql($arr['color']);
var_dump($new);


// $new = arrays::array2object($arr);
// var_dump($new);

$new = arrays::array2string($arr);
var_dump($new);


$new = arrays::cleanout($arr,'color');
var_dump($new);
