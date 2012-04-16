<?php
require_once 'Zend/Controller/Action.php';

class AdminController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
        $this->view->baseUrl = $this->_request->getBaseUrl();
        
        Zend_Loader::loadClass('Userticket');
        Zend_Loader::loadClass('Guestticket');
    }
    
   public function editAction() 
   {
      $this->view->assign('title','Edytuj Ticket');
   }

   public function deleteAction() 
   {
      $this->view->assign('title','Usuń Ticket');
   }
    
  public function indexAction()
  {
    $this->view->assign('name', 'Seik');
    $this->view->assign('title', 'Lista tiketów');
    
    $userticket = new Userticket();
    $this->view->usertickets = $userticket->fetchAll();
    
    $guestticket = new Guestticket();
    $this->view->guesttickets = $guestticket->fetchAll();
  }
}

?>
