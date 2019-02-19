<?php

namespace PhpUnitDemo\Tests\Servies;

use PhpUnitDemo\Services\HashCreator;
use PHPUnit\FrameWork\TestCase;

class HashCreatorTest extends TestCase
{
    public function testCreateHash() 
    {
        $hashCreator = new HashCreator();
        
        $hash = $hashCreator->createHash('test hash');
        
        $this->assertEquals('hashed password', $hash);
    }
}

namespace PhpUnitDemo\Services;

function password_hash()
{
    return 'hashed password';
}
