<?php
    namespace Controller;
    
    use \Library\Request;
    use \Library\Controller;
    use \Library\ProductsManager;
    
    class StoreController extends Controller {
        
        public function indexAction(Request $request = null) {
            $view = str_replace(['\\', 'Controller'], '', get_class($this));
            
            $productsManager = new \Library\ProductsManager($this->container->get('pdo_connection'));
            $productManager = $productsManager->get_products($view); // asks for bikes manager
            $products[lcfirst($view)] = $productManager->findBikes();
            
            $viewFile = "Layout" . $view . ".phtml";
            return $this->render($viewFile, $products);
        }
        
        public function showAction($itemID) {
            $viewFile = "Layout" . ucfirst($view) . ".phtml";
            return $this->render($viewFile, $products);
        }
        
        public function searchAction($params = array()) {
            
        }
    }
?>