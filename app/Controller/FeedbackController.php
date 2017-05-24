<?php
    namespace Controller;
    use \Library\Request;
    use \Library\Controller;
    use \Library\Session;
    use \Model\FeedbackManager;
    use \Model\Form\FeedbackForm;
    
    class FeedbackController extends Controller {
        
        public function indexAction() {
            $view = str_replace(['\\', 'Controller'], '', get_class($this));
            
            $viewFile = "Layout" . $view . ".phtml";
            return $this->render($viewFile);
        }
        
        public function proccessAction() {
            $request = $this->container->get('request');
            $router = $this->container->get('router');
            $pdo = $this->container->get('pdo_connection');
            
            $feedbackForm = new FeedbackForm($request);
            
            if (!$feedbackForm->isValid()) {
                
                Session::setFlash('Incorrect form data');
                $router->redirect($router->getURI('contact_us'));
            }
            
            $feedbackManager = new FeedbackManager();
            $feedbackManager->set_pdo($pdo);
            if (!$feedbackManager->writefeedback($feedbackForm)) {
                Session::setFlash('Could not save form that You sent. Try again.');
                $router->redirect($router->getURI('contact_us'));
            }
            
            Session::setFlash('Data sent');
            $router->redirect($router->getURI('contact_us'));
        }
    }
?>