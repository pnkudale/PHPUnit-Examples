<?php

namespace PhpUnitDemo\Services;

use PhpUnitDemo\Services\UserRetriever;

/**
 * User validator service
 *
 * @author pravinkudale
 */
class UserValidator 
{
    private $userRetriever;
    
    public function __construct(UserRetriever $userRetriever) 
    {
        $this->userRetriever = $userRetriever;
    }
    
    public function validate() 
    {
        $user = $this->userRetriever->getUser();
        
        if (empty($user['email'])) {
            return false;
        }
            
        return true;
    }
    
}
