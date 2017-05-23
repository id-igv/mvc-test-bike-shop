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
            $sth = $this->pdo->query("SELECT * FROM bikes"); //WHERE status = 1 LIMIT {$offset}, {$count}");
            
            while ($res = $sth->fetch(\PDO::FETCH_ASSOC)) {
                $bike = new Bike(
                                 $res['id'], 
                                 $res['model_name'], 
                                 $res['manufacturer'], 
                                 $res['type'], 
                                 $res['wheel_size'], 
                                 $res['price']
                                 );
                // echo '<pre>';print_r($bike);echo '</pre>';
                // echo 'end';
                $collection[] = $bike;
            }
            
            return $collection;
        }
    }
?>