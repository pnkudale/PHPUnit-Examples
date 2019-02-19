<?php

namespace PhpUnitDemo\Services;

class CsvWriter 
{
    public function write($handle, $data) 
    {
        //process data before writing into file
        fputcsv($handle, $data);
    }
}
