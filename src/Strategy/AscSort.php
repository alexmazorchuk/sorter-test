<?php

declare(strict_types=1);

namespace App;


final class AscSort implements MainInterface
{
    public function sort(array $dataArray)
    {
        \asort($dataArray);

        return $dataArray;
    }
}