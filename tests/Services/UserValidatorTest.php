<?php

use PHPUnit\Framework\TestCase;
use PhpUnitDemo\Services\UserValidator;
use PhpUnitDemo\Services\UserRetriever;

/**
 * Unit tests of UserValidator class
 *
 * @author pravinkudale
 */
class UserValidatorTest extends TestCase
{
    public function testValidate() 
    {
        $userRetrieverMock = Mockery::mock(UserRetriever::class);
        $userRetrieverMock->shouldReceive('getUser')
            ->once()
            ->withNoArgs()
            ->andReturn(['email' => 'foo@bar.com']);

        $userValidator = new UserValidator($userRetrieverMock);
        $this->assertTrue($userValidator->validate());
    }
    
    public function testWhenEmailIsEmpty() 
    {
        $userRetrieverMock = Mockery::mock(UserRetriever::class);
        $userRetrieverMock->shouldReceive('getUser')
            ->once()
            ->withNoArgs()
            ->andReturn(['email' => '']);

        $userValidator = new UserValidator($userRetrieverMock);
        $this->assertFalse($userValidator->validate());
    }
}
