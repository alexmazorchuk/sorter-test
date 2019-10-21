<?php

declare(strict_types=1);

namespace  App;

final class NullObject implements MainInterface
{
    public function sort(array $dataArray)
    {
        return $dataArray;
    }
}