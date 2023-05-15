<?php

/**
*
* Class Application
*
* @author Andreas Carlsson
* @package ${NAMESPACE}
*/


class Application
{
    public Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }
}