<?php

namespace PhpUnitDemo\Services;

use PhpUnitDemo\Model\User;

/**
 * User creator service
 *
 * @author pravinkudale
 */
class UserCreator 
{
    public function __construct(
        UserValidator $userValidator, 
        UserPersister $userPersister
    ) {
        $this->userValidator = $userValidator;
        $this->userPersister = $userPersister;
    }

    public function create($userData) 
    {
        $user = new User();
        $user->setName($userData['name']);
        $user->setEmail($userData['email']);
        $user->setAge($userData['age']);
        $user->setExpiryDate(new \DateTime($userData['days']));
        
        $result = $this->userValidator->validate($user);
        
        if ($result) {
            $userPersister = new UserPersister();
            $userPersister->persist($user);
            
            //$this->userPersister->persist($user);

            return $user;
        }

        return null;
    }
}
