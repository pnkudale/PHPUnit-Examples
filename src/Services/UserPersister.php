<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PhpUnitDemo\Services;

use PhpUnitDemo\Model\User;

/**
 * Description of UserPersister
 *
 * @author pravinkudale
 */
class UserPersister 
{
    public function persist(User $user) 
    {
        echo "in persist";exit;
    }
}
