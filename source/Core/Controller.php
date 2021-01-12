<?php

namespace Source\Core;


class Controller 
{
    /**
     * $view
     */
    protected $view;
    /**
     * __construct
     */
    public function __construct(string $pathToViews = null)
    {
        $this->view = new View($pathToViews);
    }
}


