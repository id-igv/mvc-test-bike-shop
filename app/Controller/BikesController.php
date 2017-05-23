<?php
    namespace Controller;
    
    use \Library\Request;
    use \Library\Controller;
    use \Library\ProductsManager;
    
    class BikesController extends Controller {
        
        public function indexAction(Request $request = null) {
            $view = str_replace(['\\', 'Controller'], '', get_class($this));
            
            $productsManager = new \Library\ProductsManager($this->container->get('pdo_connection'));
            $productManager = $productsManager->get_products($view); // asks for bikes manager
            $products[lcfirst($view)] = $productManager->findAll();
            
            $viewFile = "Layout" . $view . ".phtml";
            return $this->render($viewFile, $products);
        }
        
        public function showAction() {
            $view = lcfirst( str_replace(['\\', 'Controller'], '', get_class($this))); // gets the view name
            $route = $this->container->get('router')->get_crntRoute();
            
            $itemID = $route->get_params(); // gets the router to access the current rout params
            
            $productsManager = new \Library\ProductsManager($this->container->get('pdo_connection'));
            $productManager = $productsManager->get_products($view); // asks for bikes manager
            $products[$view] = $productManager->findAll();
            
            $viewFile = "Layout" . ucfirst($view) . ".phtml";
            return $this->render($viewFile, $products);
        }
        
        public function searchAction($params = array()) {
            
        }
    }
?>