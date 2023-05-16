<?php


namespace app\core;

/**
*
* Class Request
*
* @author Andreas Carlsson
* @package app\core
*/

class Request 
{
    public function getPath() 
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');

        if ($position === false) {
            //echo $path;
            return $path;
        }
        return substr($path, 0, $position);

    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}