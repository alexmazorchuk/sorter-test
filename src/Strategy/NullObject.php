<?php

declare(strict_types=1);

namespace Alexmazorchuk\Sorter\Strategy;

use Alexmazorchuk\Sorter\SortStrategyInterface;

final class NullObject implements SortStrategyInterface
{
    public function sort(array $dataArray):array
    {
        return $dataArray;
    }
}