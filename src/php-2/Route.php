<?php

include_once("helper.php");

class Route
{
    public $path = "/";
    private $handler;

    public function __construct($path, $handler)
    {
        $this->path = $path;
        $this->handler = $handler;
    }

    public function handle()
    {
        return ($this->handler)();
    }

    public function match($path)
    {
        return paths_match($path, $this->path);
    }
}
