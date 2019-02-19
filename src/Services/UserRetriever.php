<?php

namespace PhpUnitDemo\Services;

use PhpUnitDemo\Services\Client;

/**
 * User retriever service
 *
 * @author pravinkudale
 */
class UserRetriever 
{
    public function getUser() 
    {
        return [
            'id' => 11,
            'name' => 'abc',
            'email' => 'foo@bar.com',
        ];
    }
    
    public function getRemoteUsersData($url) 
    {
        if (Client::getData($url)) {
            return 'Successfully fetched remove users data';
        }
        
        return 'Failed to fetch remove users data';
    }
}
