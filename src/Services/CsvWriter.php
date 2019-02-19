<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PhpUnitDemo\Services;

class CsvWriter 
{
    public function write($handle, $data) 
    {
        //process data before writing into file
        fputcsv($handle, $data);
    }
}
