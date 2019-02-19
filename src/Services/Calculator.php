<?php

namespace PhpUnitDemo\Services;

/**
 * Calculator
 *
 * @author pravinkudale
 */
class Calculator 
{
    public function add($a, $b) 
    {
        if (!is_int($a) || !is_int($b)) {
            throw new \Exception('Invalid arguments provided');
        }
        
        return $a + $b;
    }
}
