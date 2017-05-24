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
            $view = str_replace(['\\', 'Controller'], '', get_class($this)); // gets the view name
            $route = $this->container->get('router')->getCurrentRoute();
            
            $params = $route->get_requestedParams(); // gets the router to access the current rout params
            
            $productsManager = new \Library\ProductsManager($this->container->get('pdo_connection'));
            $productManager = $productsManager->get_products($view); // asks for bikes manager
            $product[lcfirst($view)] = $productManager->findByID($params['id']);
            
            $viewFile = "Layout" . $view . "Desc.phtml";
            return $this->render($viewFile, $product);
        }
        
        public function searchAction($params = array()) {
            
        }
    }
?>