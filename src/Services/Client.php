<?php

namespace PhpUnitDemo\Services;

/**
 * Client service to fetch remote data
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
