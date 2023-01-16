<?php

namespace core;

class Router
{
    //todo : build a router class
    public $routes = [];


    public function add($uri, $controller, $method ){
        $this->routes[]= [
            'uri' => $uri,
            'controller' => $controller,
            'method' => strtoupper($method)
        ];
    }

    public function get($uri, $controller){
        $this->add($uri, $controller, 'get');
    }

    public function post($uri, $controller){
        $this->add($uri, $controller, 'post');
    }

    public function put($uri, $controller){
        $this->add($uri, $controller, 'put');
    }

    public function delete($uri, $controller){
        $this->add($uri, $controller, 'DELETE');
    }

    public function patch($uri, $controller){
        $this->add($uri, $controller, 'patch');
    }

    public function route($uri, $method){
        foreach($this->routes as $route){
            if($route['uri'] === $uri && $route['method'] === strtoupper($method)){

                return require base_path($route['controller']);
            }
        }
        // abort(404);
        authorize(false, Response::NOT_FOUND);
    }


}
