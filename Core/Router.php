<?php

namespace Core;


class Router
{
    private $routes = [];
    public function add($method, $uri, $handler) {
        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $this->formatPath($uri),
            'handler' => $handler
        ];
    }
    public function dispatch($httpmethod, $path) {
        $uri = $this->formatPath($path);

        foreach ($this->routes as $route) {
            $routeParts = explode('/', $route['path']);
            $uriParts = explode('/', $uri);

            if ($route['method'] === strtoupper($httpmethod) && count($routeParts) === count($uriParts)) {
                $params = [];
                $isMatch = true;

                foreach ($routeParts as $index => $part) {

                    if (!str_contains($part, '{')) {
                        if ($part !== $uriParts[$index]) {
                            $isMatch = false;
                            break;
                        }
                    } else {
                        $params[] = $uriParts[$index];
                    }
                }

                if ($isMatch) {
                    $class = $route['handler'][0];
                    $method = $route['handler'][1];
                    $instance = new $class();
                    var_dump($params);
                    return call_user_func_array([$instance, $method], $params);
                }
            }
        }

        http_response_code(404);
        echo "404 Not Found";
    }

    private function formatPath($path) {
        return '/' . trim($path, '/');
    }
}