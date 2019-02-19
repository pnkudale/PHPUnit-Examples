<?php

namespace PhpUnitDemo\Tests\Servies;

use Mockery\Adapter\Phpunit\MockeryTestCase;
use PhpUnitDemo\Services\UserCreator;
use PhpUnitDemo\Services\UserValidator;
use PhpUnitDemo\Services\UserPersister;
use PhpUnitDemo\Model\User;
use Mockery;

class UserCreatorTest extends MockeryTestCase
{
    public function testUserCreation() 
    {
        $this->markTestSkipped();
        $userValidatorMock = Mockery::mock(UserValidator::class);
        $userPersisterMock = Mockery::mock(UserPersister::class);
        $userCreator = new UserCreator($userValidatorMock, $userPersisterMock);
        $userData = [
            'name' => 'test', 
            'email' => 'foo@bar.com', 
            'age' => 45, 
            'days' => '7 days', 
        ];
        $user = new User();
        $userValidatorMock->shouldReceive('validate')
            ->once()
            ->with(Mockery::on(function ($user) {
                $this->assertInstanceOf(User::class, $user);
                
                return true;
            }))
            ->andReturn(true);
        $userPersisterMock->shouldReceive('persist')
            ->once()
            ->with(Mockery::on(function ($user) {
                $this->assertInstanceOf(User::class, $user);
                
                return true;
            }));
        $result = $userCreator->create($userData);
        $this->assertEquals('test', $result->getName());
        $this->assertEquals('foo@bar.com', $result->getEmail());
        $this->assertEquals(45, $result->getAge());
        $this->assertInstanceOf(\DateTime::class, $result->getExpiryDate());
    }
    
    public function testUserCreationWithInstance() 
    {
        $userValidatorMock = Mockery::mock(UserValidator::class);
        $userPersisterMock = Mockery::mock('overload:'.UserPersister::class);
        $userCreator = new UserCreator($userValidatorMock, $userPersisterMock);
        $userData = [
            'name' => 'test', 
            'email' => 'foo@bar.com', 
            'age' => 45, 
            'days' => '7 days', 
        ];
        $user = new User();
        $userValidatorMock->shouldReceive('validate')
            ->once()
            ->with(Mockery::on(function ($user) {
                $this->assertInstanceOf(User::class, $user);
                
                return true;
            }))
            ->andReturn(true);
        $userPersisterMock->shouldReceive('persist')
            ->once()
            ->with(Mockery::on(function ($user) {
                $this->assertInstanceOf(User::class, $user);
                
                return true;
            }));
        $result = $userCreator->create($userData);
        $this->assertEquals('test', $result->getName());
        $this->assertEquals('foo@bar.com', $result->getEmail());
        $this->assertEquals(45, $result->getAge());
        $this->assertInstanceOf(\DateTime::class, $result->getExpiryDate());
    }
}
