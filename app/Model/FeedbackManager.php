<?php
    namespace Model;
    
    use \Library\Manager;
    use \Model\Form\FeedbackForm;
    
    class FeedbackManager extends Manager {
        private $form;
        
        
        public function writeFeedback(FeedbackForm $form) {
            $sth = $this->pdo->prepare("INSERT INTO feedback (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
            return $sth->execute([
                            ':name' => $form->get_name(),
                            ':email' => $form->get_email(),
                            ':subject' => $form->get_subject(),
                            ':message' => $form->get_message()
                            ]);
        }
        
        public function findFeedback($params = []) {
            
        }
        
        public function findAll() {
            
        }
    }
    
?>
