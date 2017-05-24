<?php
    /*
        Manages all products that should be displayed to user
    */
    
    namespace Library;
    
    use \Library\Manager;
    
    class ProductsManager extends Manager {
        
        private $products = [];
        
        
        public function get_products($name) {
            
            if (isset($this->products[$name])) {
                return $this->products[$name];
            }
            
            $productManager = "\\Model\\{$name}Manager";
            $productManager = new $productManager($this->pdo);
            $products[$name] = $productManager;
            
            return $productManager;
        }
        
        public function set_products($key, $value) {
            $this->products[$key] = $value;
        }
        
        public function getStore() {
            return false;
            $productManager = new StoreManager($this->pdo);
            $products[$name] = $productManager;
        }
        
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
    }
?>