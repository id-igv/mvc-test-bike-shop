<?php
    /*
        Contains global params to access them from different 
        places of this app
    */
    
    namespace Library;
    
    class Container {
        
        private $objects = [];
    
        public function get($key)
        {
            if (isset($this->objects[$key])) {
                return $this->objects[$key];
            }
            
            return null;
        }
        
        public function set($key, $value)
        {
            $this->objects[$key] = $value;
        }
    }
?>