<?php
    namespace Controller;
    
    use \Library\Request;
    use \Library\Controller;
    use \Library\ProductsManager;
    use \Library\Session;
    
    class CartController extends Controller {
        
        public function indexAction(Request $request = null) {
            $view = str_replace(['\\', 'Controller'], '', get_class($this));
            
            $cart = unserialize(Session::get('cart'));
            
            $viewFile = "Layout" . ucfirst($view) . ".phtml";
            if ($cart != null) {
                return $this->render($viewFile, $cart);
            }
            return $this->render($viewFile);
        }
        
        public function addAction() {
            $cart = unserialize(Session::get('cart'));
            $route = $this->container->get('router')->getCurrentRoute();
            $params = $route->get_requestedParams();
            
            $productsManager = new \Library\ProductsManager($this->container->get('pdo_connection'));
            $productManager = $productsManager->get_products(ucfirst($params['name'].'s')); // asks for bikes manager
            $product = $productManager->findByID($params['id']);
            
            $cart[$params['name']][] = [
                                        'id' => $product->get_id(), 
                                        'model_name' => $product->get_model_name(), 
                                        'manufacturer' => $product->get_manufacturer(), 
                                        'price' => $product->get_price()
                                        ];
            
            Session::set('cart', serialize($cart));
            Session::setFlash('Item has been added to your cart');
            
            $router = $this->container->get('router');
            $router->redirect($router->getURI('store_bikes'));
        }
        
        public function deleteAction($params = array()) {
            $cart = unserialize(Session::get('cart'));
            $route = $this->container->get('router')->getCurrentRoute();
            $params = $route->get_requestedParams();
            
            unset($cart[$params['name']][$params['id']]);
            
            Session::set('cart', serialize($cart));
            Session::setFlash('Item has been removed from your cart');
            
            $router = $this->container->get('router');
            $router->redirect($router->getURI('cart'));
        }
        
        public function clearAction() {
            Session::remove('cart');
            Session::setFlash('Your cart has been cleared');
            
            $router = $this->container->get('router');
            $router->redirect($router->getURI('cart'));
        }
    }
?>