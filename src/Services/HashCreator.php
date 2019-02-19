<?php

namespace PhpUnitDemo\Services;

class HashCreator
{
    public function createHash($password) 
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        return $hashedPassword;
        
    }
}
