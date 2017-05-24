<?php
    /*
        Root controller class that contains $container and render functionality
    */
    
    namespace Library;
    
    abstract class Controller {
        
        protected $container;
        
        
        public function get_container() {
            return $this->container;
        }
        
        public function set_container($container) {
            $this->container = $container;
        }
        
        public function render($view, array $args = []) {
            // gathers the whole page
            extract($args);
            
            $viewFilePath = VIEW . $view;
            
            // requires content
            ob_start();
                require($viewFilePath);
            $content = ob_get_clean();
            
            // requires sites layout
            ob_start();
                require(VIEW . 'Layout.phtml'); // already is filled by content
            $layout = ob_get_clean();
            
            return $layout;
        }
    }
?>