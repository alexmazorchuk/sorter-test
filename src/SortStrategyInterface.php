<?php

declare(strict_types=1);

namespace Alexmazorchuk\Sorter;

interface SortStrategyInterface
{
    public function sort(array $Array):array ;
}