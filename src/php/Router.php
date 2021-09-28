<?php

class Router
{
    const METHOD_GET = "GET";
    const METHOD_POST = "POST";
    const METHOD_PUT = "PUT";
    const METHOD_DELETE = "DELETE";

    public $routes = [
        self::METHOD_GET => [],
        self::METHOD_POST => [],
        self::METHOD_PUT => [],
        self::METHOD_DELETE => [],
    ];

    public function __construct()
    {
    }

    public function use($route, $handler)
    {
        array_push($routes, $route, $handler);
    }

    public function get($path, $handler)
    {
        $routes = $this->routes[self::METHOD_GET];

        $route = new Route($path, $handler);
        array_push($routes, $route);
    }

    public function post($path, $handler)
    {
        $routes = $this->routes[self::METHOD_POST];

        $route = new Route($path, $handler);
        array_push($routes, $route);
    }

    public function put($path, $handler)
    {
        $routes = $this->routes[self::METHOD_PUT];

        $route = new Route($path, $handler);
        array_push($routes, $route);
    }

    public function delete($path, $handler)
    {
        $routes = $this->routes[self::METHOD_DELETE];

        $route = new Route($path, $handler);
        array_push($routes, $route);
    }

    public function handle($path, $method)
    {
        foreach
        return $this->color;
    }
}
