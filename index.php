<?php

class Advent
{
    protected $dataSet;

    public function __construct()
    {
        // 2 values = 252724
        // 3 values = 276912720
        $this->dataSet = explode("\n", file_get_contents('./src/input-day-1.txt'));
    }

    public function calculate()
    {
        foreach ($this->dataSet as $record) {
            foreach ($this->dataSet as $newRecord) {
                foreach ($this->dataSet as $thirdRecord) {
                    if ($record + $newRecord + $thirdRecord === 2020) {
                        var_dump([$record, $newRecord, $thirdRecord, $record * $newRecord * $thirdRecord]);
                        return;
                    }
                }

            }
        }
    }
}

(new Advent)->calculate();