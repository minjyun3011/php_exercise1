<?php

require_once __DIR__ . '/car.php';
require_once __DIR__ . '/Taxi.php';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 2人乗車
echo $taxi1->pickUp(2);
echo $taxi1->information();
echo PHP_EOL;

// 1人乗車
echo $taxi1->pickUp(1);
echo $taxi1->information();
echo PHP_EOL;

// 2人降車
echo $taxi1->lower(2);
echo $taxi1->information();
echo PHP_EOL;

// 2人降車
// 1人しか乗っていないので降車できない
echo $taxi1->lower(2);
echo PHP_EOL;

// 4人いっきに乗車
// 定員は4人なので乗車できない
echo $taxi1->pickup(4);
echo PHP_EOL;

echo $taxi1->pickup(2);
echo $taxi1->information();
echo PHP_EOL;

echo $taxi1->pickup(2);
echo PHP_EOL;

echo $taxi1->pickup(1);
echo $taxi1->information();
echo PHP_EOL;
