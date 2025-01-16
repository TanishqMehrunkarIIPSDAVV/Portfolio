<?php

namespace Framework;
class Router
{
    protected $routes = [];

    /**
     * Register a Route
     * @param string $method
     * @param string $uri
     * @param string $action
     * @return void
     */
    public function registerRoute($uri,$page)
    {
        $this->routes[]=[
            "uri"=>$uri,
            "page"=>$page,
        ];
    }

    /**
     * Route a Request
     * @param string $uri
     * @return void
     */
    public function route($uri)
    {
        foreach($this->routes as $route)
        {
            if($route["uri"] === $uri)
            {
                load($route["page"]);
                return;
            }
        }
        load("Error");
        exit;
    }
}