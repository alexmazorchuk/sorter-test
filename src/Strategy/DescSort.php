<?php

declare(strict_types=1);

namespace App;


final class DescSort implements MainInterface
{
    public function sort(array $dataArray)
    {
        \sort($dataArray);

        return $dataArray;
    }
}