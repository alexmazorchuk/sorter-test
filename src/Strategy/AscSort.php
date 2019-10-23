<?php

declare(strict_types=1);

namespace Alexmazorchuk\Sorter\Strategy;

use Alexmazorchuk\Sorter\SortStrategyInterface;

final class AscSort implements SortStrategyInterface
{
    public function sort(array $dataArray):array
    {
        \asort($dataArray);

        return $dataArray;
    }
}