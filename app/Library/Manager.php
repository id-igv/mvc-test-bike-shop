<?php
    namespace Library;
    
    class Manager {
        
        protected $pdo = null;
        
        public function set_pdo($pdo) {
            $this->pdo = $pdo;
        }
    }
?>