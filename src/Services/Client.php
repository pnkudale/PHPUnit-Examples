<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PhpUnitDemo\Services;

/**
 * Description of WebDataFetcher
 *
 * @author pravinkudale
 */
class Client 
{
    public static function getData($url)
    {
        if (empty($url)) {
            return false;
        }
        //Get data frotruem api
        return true;
    }
}
