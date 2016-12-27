<?php

namespace restapi;

class Module extends \rii\rest\Module
{
    /** {@inheritdoc} */
    public function init()
    {
        parent::init();
    }

    /** {@inheritdoc} */
    public function createController($route)
    {
        return parent::createController($route);
    }
}
