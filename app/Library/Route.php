<?php
    namespace Library;

    class Route {
        private $routeName;
        private $pattern;
        private $controller;
        private $action;
        private $params;
        private $requestedParams;
        
        public function __construct($routeName, $pattern, $controller, $action = 'index', $params = array()) {
            $this->routeName = $routeName;
            $this->pattern = $pattern;
            $this->controller = $controller;
            $this->action = $action;
            $this->params = $params;
        }
        
        public function get_routeName() {
            return $this->routeName;
        }
        
        public function get_pattern() {
            return $this->pattern;
        }
        
        public function get_controller() {
            return $this->controller;
        }
        
        public function get_action() {
            return $this->action;
        }
        
        public function get_params() {
            return $this->params;
        }
        
        public function get_requestedParams() {
            return $this->requestedParams;
        }
        
        public function set_requestedParams($params) {
            $this->requestedParams = $params;
        }
    }
?>