<?php
require_once 'Zend/Controller/Action.php';

class UserController extends Zend_Controller_Action
{
   public function addAction() 
   {
      $this->view->assign('title','Dodaj Ticket');
   }
    
  public function indexAction()
  {
    $this->view->assign('name', 'Wiwit');
    $this->view->assign('title', 'Hello');
  }
  
  public function nameAction()
  {
  
    $request = $this->getRequest();
    $this->view->assign('name', $request->getParam('username'));
    $this->view->assign('gender', $request->getParam('gender'));	  
		
    $this->view->assign('title', 'User Name');
  }  
}
?>
