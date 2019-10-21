<?php


namespace App;


final class AscSort implements MainInterface
{
    public function sort(array $dataArray)
    {
        \asort($dataArray);

        return $dataArray;
    }
}