<?php

namespace PhpUnitDemo\Model;

/**
 * User model
 *
 * @author pravinkudale
 */
class User 
{
    private $name;
    
    private $email;
    
    private $age;
    
    private $expiryDate;
    
    public function getName() 
    {
        return $this->name;
    }
    
    public function getEmail() 
    {
        return $this->email;
    }
    
    public function getAge() 
    {
        return $this->age;
    }
    
    public function getExpiryDate() 
    {
        return $this->expiryDate;
    }
    
    public function setName($name) 
    {
        $this->name = $name;
    }
    
    public function setEmail($email) 
    {
        $this->email = $email;
    }
    
    public function setAge($age) 
    {
        $this->age = $age;
    }
    
    public function setExpiryDate($expiryDate) 
    {
        $this->expiryDate = $expiryDate;
    }
}
