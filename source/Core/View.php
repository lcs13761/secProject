<?php

namespace Source\Core;

use League\Plates\Engine;

class View
{
    /**
     * $engine
     */
    private $engine;
    
    /**
     * construct $path , $ext
     */
    public function __construct(string $path = CONF_VIEW_PATH, string $ext = CONF_VIEW_EXT)
    {
        $this->engine = Engine::create($path, $ext);
    }
    /**
     * function path with $name, $path
     * @return View
     */
    public function Path(string $name, string $path):View
    {
        $this->engine->addfolder($name,$path);
        return $this;
    }
    /**
     * function render for Web
     * @return string
     */
    public function render(string $templateName, array $data):string
    {
        return $this->engine->render($templateName, $data);
    }
    /**
     * function engine 
     * @return engine
     */
    public function engine():engine
    {
        return $this->engine;
    }
}

