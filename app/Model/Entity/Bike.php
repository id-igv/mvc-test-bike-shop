<?php
    namespace Model\Entity;
    
    class Bike {
        
        private $id;
        private $model_name;
        private $manufacturer;
        private $type;
        private $wheel_size;
        private $price;
        private $frame;
        private $tires;
        private $shifters;
        private $front_derail;
        private $rear_derail;
        private $crank;
        private $cassete;
        private $chain;
        private $brake_set;
        private $img_src;
        
        
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
        
        public function get_frame() {
            return $this->frame;
        }
        public function set_frame($value) {
            $this->frame = $value;
        }
        
        public function get_tires() {
            return $this->tires;
        }
        public function set_tires($value) {
            $this->tires = $value;
        }
        
        public function get_shifters() {
            return $this->shifters;
        }
        public function set_shifters($value) {
            $this->shifters = $value;
        }
        
        public function get_front_derail() {
            return $this->front_derail;
        }
        public function set_front_derail($value) {
            $this->front_derail = $value;
        }
        
        public function get_rear_derail() {
            return $this->rear_derail;
        }
        public function set_rear_derail($value) {
            $this->rear_derail = $value;
        }
        
        public function get_crank() {
            return $this->crank;
        }
        public function set_crank($value) {
            $this->crank = $value;
        }
        
        public function get_cassete() {
            return $this->cassete;
        }
        public function set_cassete($value) {
            $this->cassete = $value;
        }
        
        public function get_chain() {
            return $this->chain;
        }
        public function set_chain($value) {
            $this->chain = $value;
        }
        
        public function get_brake_set() {
            return $this->brake_set;
        }
        public function set_brake_set($value) {
            $this->brake_set = $value;
        }
        
        public function get_img_src() {
            return $this->img_src;
        }
        public function set_img_src($value) {
            $this->img_src = $value;
        }
        
        // public function __construct($id, $model_name, $manufacturer, $type, $wheel_size, $price) {
        //     $this->id = $id;
        //     $this->model_name = $model_name;
        //     $this->manufacturer = $manufacturer;
        //     $this->type = $type;
        //     $this->wheel_size = $wheel_size;
        //     $this->price = $price;
        // }
    }
?>