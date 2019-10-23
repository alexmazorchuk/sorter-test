<?php

declare(strict_types=1);

namespace Alexmazorchuk\Sorter;

final class Sorter
{
    private $sorter;

    public function __construct(SortStrategyInterface $sorter)
    {
        return $this->sorter = $sorter;
    }

    public function setSorter(SortStrategyInterface $sorter):self
    {
        $this->sorter = $sorter;
    }

    public function sort(array $dataArray):array
    {
        return $this->sorter->sort($dataArray);
    }
}