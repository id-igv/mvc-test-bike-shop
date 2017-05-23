<?php
    namespace Model\Entity;
    
    class Bike {
        
        private $id;
        private $model_name;
        private $manufacturer;
        private $type;
        private $wheel_size;
        private $price;
        
        
        public function get_id() {
            return $this->id;
        }
        public function set_id($value) {
            $this->id = $value;
        }
        
        public function get_model_name() {
            return $this->model_name;
        }
        public function set_model_name($value) {
            $this->model_name = $value;
        }
        
        public function get_manufacturer() {
            return $this->manufacturer;
        }
        public function set_manufacturer($value) {
            $this->manufacturer = $value;
        }
        
        public function get_type() {
            return $this->type;
        }
        public function set_type($value) {
            $this->type = $value;
        }
        
        public function get_wheel_size() {
            return $this->wheel_size;
        }
        public function set_wheel_size($value) {
            $this->wheel_size = $value;
        }
        
        public function get_price() {
            return $this->price;
        }
        public function set_price($value) {
            $this->price = $value;
        }
        
        public function __construct($id, $model_name, $manufacturer, $type, $wheel_size, $price) {
            $this->id = $id;
            $this->model_name = $model_name;
            $this->manufacturer = $manufacturer;
            $this->type = $type;
            $this->wheel_size = $wheel_size;
            $this->price = $price;
        }
    }
?>