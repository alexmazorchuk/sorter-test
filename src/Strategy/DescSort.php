<?php

declare(strict_types=1);

namespace Alexmazorchuk\Sorter\Strategy;

use Alexmazorchuk\Sorter\SortStrategyInterface;

final class DescSort implements SortStrategyInterface
{
    public function sort(array $dataArray):array
    {
        \sort($dataArray);

        return $dataArray;
    }
}