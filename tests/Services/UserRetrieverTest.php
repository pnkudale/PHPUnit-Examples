<?php

namespace PhpUnitDemo\Tests\Services;

use Mockery\Adapter\Phpunit\MockeryTestCase;
use PhpUnitDemo\Services\UserRetriever;
use PhpUnitDemo\Services\Client;
use Mockery;

/**
 * Unit tests of UserRetriever class
 *
 * @author pravinkudale
 */
class UserRetrieverTest extends MockeryTestCase
{
    public function testGetUser() 
    {
        $userRetriever = new UserRetriever();
        $this->assertEquals(
            [
                'id' => 11,
                'name' => 'abc',
                'email' => 'foo@bar.com',
            ],
            $userRetriever->getUser()
        ); 
    }
    
    public function testGetData() 
    {
        $userRetriever = new UserRetriever();
        
        $clientMock = Mockery::mock('alias:'.Client::class);
        $clientMock->shouldReceive('getData')
            ->once()
            ->with('foo@bar.com')
            ->andReturn(true);
        
        $result = $userRetriever->getRemoteUsersData('foo@bar.com');
        $this->assertEquals('Successfully fetched remove users data', $result);
    }
}
