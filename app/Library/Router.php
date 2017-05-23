<?php
    namespace Library;
    
    class Router {
        
        private $routes; // list of all routes
        private $crntRoute; // stores current route chosen by user
        
        // constructor sets routes list and defines current route by uri
        public function __construct($routesList, Request $request) {
            $this->routes = require($routesList);
            
            $requestedRoute = $request->server('REQUEST_URI');
            $requestedRoute = explode('?', $requestedRoute);
            $requestedRoute = $requestedRoute[0];
            
            // finds matches in routes
            foreach ($this->routes as $route) {
                $pattern = $route->get_pattern();
                foreach ($route->get_params() as $param_key => $param) {
                    $pattern = str_replace('{' . $param_key . '}', '(' . $param . ')', $pattern);
                }
                $pattern = '@^' . $pattern . '$@';
                
                
                if (preg_match($pattern, $requestedRoute, $matches)) { // if found => generate crntRoute
                    $this->crntRoute = $route;
                    $this->crntRoute->set_requestedParams( array_shift($matches));
                    break;
                }
            }
            
            if (!$this->crntRoute) { // if didn't => error
                $this->crntRoute = $this->getRoute('error');
            }
        }
        
        public function getURI($routeName, $params = array()) {
            foreach ($this->routes as $route) {
                if ($route->get_routeName() === $routeName) {
                    $params = implode('/', $params);
                    return $route->get_pattern() . ($params == null ? '' : '/' . $params);
                }
            }
        }
        
        public function getRoute($routeName) {
            foreach ($this->routes as $route) {
                if ($route->get_routeName() === $routeName) {
                    return $route;
                }
            }
        }
        
        public function getCurrentRoute() {
            return $this->crntRoute;
        }
        
        public function redirect($to) {
            header("Location: {$to}");
            die;
        }
        
        public function __toString() {
            return "<pre>" . print_r($this->crntRoute, true) . "</pre>";
        }
    }
?>