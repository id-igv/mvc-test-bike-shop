<?php
    namespace Controller;
    use \Library\Request;
    use \Library\Controller;
    
    class FeedbackController extends Controller {
        
        public function indexAction(Request $request = null) {
            $view = lcfirst( str_replace(['\\', 'Controller'], '', get_class($this)));
            
            $viewFile = "Layout" . ucfirst($view) . ".phtml";
            return $this->render($viewFile);
        }
    }
?>