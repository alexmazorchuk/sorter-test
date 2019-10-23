<?php

require_once __DIR__ . './../vendor/autoload.php';

use Alexmazorchuk\Sorter;
use Alexmazorchuk\Sorter\Strategy\AscSort;
use Alexmazorchuk\Sorter\Strategy\DescSort;
use Alexmazorchuk\Sorter\Strategy\NullObject;

$stringArray = ['Alexandr', 'Igor', 'Max', 'Oleg', 'Taras'];
$numberArray = [1990, 1991, 1992, 2000, 2019];

$ascSort = new Sorter(new AscSort());
$descSort = new Sorter(new DescSort());
$nullSort = new Sorter(new NullObject());

$sorters = [$ascSort, $descSort, $nullSort];
foreach ($sorters as $sort) {
    echo 'Sorts strings array as '. $sort . \PHP_EOL;
    \var_dump($sort->sort($stringArray));

    echo 'Sorts numbers array'. $sort . \PHP_EOL;
    \var_dump($sort->sort($numberArray));
}
