<?php

namespace PhpUnitDemo\Tests\Services;

use PHPUnit\Framework\TestCase;
use PhpUnitDemo\Services\Calculator;

/**
 * Unit tests of Calculator class
 *
 * @author pravinkudale
 */
class CalculatorTest extends TestCase
{
    public function testAdd() 
    {
        $calculator = new Calculator();
        $result = $calculator->add(5, 7);
        
        $this->assertEquals(12, $result);
    }
    
    /**
     * @expectedException Exception
     * @expectedExceptionMessage Invalid arguments provided
     */
    public function testWhenArgumentsAreStrings() 
    {
        $calculator = new Calculator();
        $calculator->add(5, '7');
    }
    
    /**
     * @dataProvider invalidParameters
     * @expectedException Exception
     * @expectedExceptionMessage Invalid arguments provided
     */
    public function testAdditionForInvalidArgument($firstNumber, $secondNumber) 
    {
        $calculator = new Calculator();
        $calculator->add($firstNumber, $secondNumber);
    }
    
    public function invalidParameters() 
    {
        return [
            ['5', '7'],
            [null, 5],
            [2, true],
            [2.5, 5],
        ];
    }
}
