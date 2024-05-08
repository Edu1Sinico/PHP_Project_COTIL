<?php

namespace Sisfin;

class Router {
    protected $routes = [];

    public function addRoute($route, $controller, $action) {
        $pos = strpos($route, '?');
        if($pos !== false) {
            $route = substr($route, 0, $pos);
        }
        $this->routes[$route] = ['controller' => $controller, 'action' => $action];
    }

    public function dispatch($uri) {
        $pos = strpos($uri, '?');
        if($pos !== false) {
            $uri = substr($uri    , 0, $pos);
        }
        if (array_key_exists($uri, $this->routes)) {
            $controller = $this->routes[$uri]['controller'];
            $action = $this->routes[$uri]['action'];

            $controller = new $controller();
            $controller->$action();
        } else {
            throw new \Exception("No route found for URI: $uri");
        }
    }
}
    