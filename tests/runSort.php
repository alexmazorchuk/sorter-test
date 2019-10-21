<?php

require_once __DIR__ . './../vendor/autoload.php';

use App\MainSorter;
use App\AscSort;
use App\DescSort;
use App\NullObject;

$stringArray = ['Alexandr', 'Igor', 'Max', 'Oleg', 'Taras'];
$numberArray = [1990, 1991, 1992, 2000, 2019];

$ascSort = new MainSorter(new AscSort());
$descSort = new MainSorter(new DescSort());
$nullSort = new MainSorter(new NullObject());

$sorters = [$ascSort, $descSort, $nullSort];
foreach ($sorters as $sort) {
    echo 'Sorts strings array as '. $sort . \PHP_EOL;
    \var_dump($sort->sort($stringArray));

    echo 'Sorts numbers array'. $sort . \PHP_EOL;
    \var_dump($sort->sort($numberArray));
}
