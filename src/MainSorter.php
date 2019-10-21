<?php


namespace App;


final class MainSorter
{
    private $sorter;

    public function __construct(MainInterface $sorter)
    {
        return $this->sorter = $sorter;
    }

    public function setSorter(MainInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    public function sort(array $dataArray)
    {
        return $this->sorter->sort($dataArray);
    }
}