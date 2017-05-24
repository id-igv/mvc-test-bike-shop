<?php
    namespace Model;
    
    use \Library\Manager;
    use Model\Entity\Bike;
    
    class BikesManager extends Manager {
        
        private $bikes = [];
        
        
        public function get_bikes() {
            return $this->bikes;
        }
        public function set_bikes(Bike $bike) {
            $this->bikes[] = $bike;
        }
        
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
        
        public function findAll() {
            $collection = [];
            $sth = $this->pdo->query("SELECT id, model_name, manufacturer, type, price, img_src, wheel_size FROM bikes"); //WHERE status = 1 LIMIT {$offset}, {$count}");
            
            while ($res = $sth->fetch(\PDO::FETCH_ASSOC)) {
                $bike = new Bike();
                
                    $bike->set_id($res['id']);
                    $bike->set_model_name($res['model_name']);
                    $bike->set_manufacturer($res['manufacturer']);
                    $bike->set_type($res['type']);
                    $bike->set_wheel_size($res['wheel_size']);
                    $bike->set_price($res['price']);
                    $bike->set_img_src($res['img_src']);
                             
                $collection[] = $bike;
            }
            
            return $collection;
        }
        
        public function findByID($id) {
            $sth = $this->pdo->prepare("SELECT * FROM bikes WHERE id = :id");//1 LIMIT {$offset}, {$count}");
            $sth->execute([':id' => $id]);
            
            $res = $sth->fetch(\PDO::FETCH_ASSOC);
            
            $bike = new Bike();
                $bike->set_id($res['id']);
                $bike->set_model_name($res['model_name']);
                $bike->set_manufacturer($res['manufacturer']);
                $bike->set_type($res['type']);
                $bike->set_wheel_size($res['wheel_size']);
                $bike->set_price($res['price']);
                $bike->set_frame($res['frame']);
                $bike->set_tires($res['tires']);
                $bike->set_shifters($res['shifters']);
                $bike->set_front_derail($res['front_derail']);
                $bike->set_rear_derail($res['rear_derail']);
                $bike->set_crank($res['crank']);
                $bike->set_cassete($res['cassete']);
                $bike->set_chain($res['chain']);
                $bike->set_brake_set($res['brake_set']);
                $bike->set_img_src($res['img_src']);
            
            return $bike;
        }
    }
?>