<?php
    namespace Controller;
    
    use \Library\Request;
    use \Library\Controller;
    use \Library\ProductsManager;
    
    class CartController extends Controller {
        
        public function indexAction(Request $request = null) {
            // $view = lcfirst( str_replace(['\\', 'Controller'], '', get_class($this)));
            
            // $productsManager = new \Library\ProductsManager($this->container->get('pdo_connection'));
            // $productManager = $productsManager->get_products($view); // asks for bikes manager
            // $products['bikes'] = $productManager->findAll();
            
            // $viewFile = "Layout" . ucfirst($view) . ".phtml";
            // return $this->render($viewFile, $products);
            return 'List of items you want to buy';
        }
        
        public function addAction() {
            // $view = lcfirst( str_replace(['\\', 'Controller'], '', get_class($this))); // gets the view name
            // $route = $this->container->get('router')->get_crntRoute();
            
            // $itemID = $route->get_params(); // gets the router to access the current rout params
            
            // $productsManager = new \Library\ProductsManager($this->container->get('pdo_connection'));
            // $productManager = $productsManager->get_products($view); // asks for bikes manager
            // $products['bikes'] = $productManager->findAll();
            
            // $viewFile = "Layout" . ucfirst($view) . ".phtml";
            // return $this->render($viewFile, $products);
            return 'Added';
        }
        
        public function deleteAction($params = array()) {
            return 'Deleted';
        }
    }
?>