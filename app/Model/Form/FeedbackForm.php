<?php
    namespace Model\Form;
    
    use \Library\Request;
    
    class FeedbackForm {
        private $name;
        private $email;
        private $subject;
        private $message;
        
        public function get_name() {
            return $this->name;
        }
        
        public function get_email() {
            return $this->email;
        }
        
        public function get_subject() {
            return $this->subject;
        }
        
        public function get_message() {
            return $this->message;
        }
        
        public function __construct(Request $request) {
            $this->name = $request->post('name');
            $this->email = $request->post('email');
            $this->subject = $request->post('subject');
            $this->message = $request->post('message');
        }
        
        public function isValid() {
            if ($this->name != null && $this->email != null
                && $this->subject != null && $this->message != null) {
                
                return true;
            }
            return false;
        }
    }
?>