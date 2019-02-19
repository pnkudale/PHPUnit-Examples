<?php

namespace PhpUnitDemo\Tests\Services;

use PHPUnit\Framework\TestCase;
use PhpUnitDemo\Services\CsvWriter;

/**
 * Unit tests of Calculator class
 *
 * @author pravinkudale
 */
class CsvWriterTest extends TestCase
{
    private $file;
    
    public function setUp() 
    {
        $this->file = fopen(__DIR__.'/testcsv.csv', 'w');
    }
    
    
    public function testWrite() {
        $csvWriter = new CsvWriter();
        
        
        $data= [59945,34353,334,3445,34453];
        $csvWriter->write($this->file, $data);
        
        $this->assertEquals(trim(file_get_contents(__DIR__.'/testcsv.csv')), '59945,34353,334,3445,34453');
    }
    
    public function tearDown() {
        unlink(__DIR__.'/testcsv.csv');
    }
}

