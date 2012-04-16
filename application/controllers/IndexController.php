<?php
require_once 'Zend/Controller/Action.php';

class IndexController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
        $this->view->baseUrl = $this->_request->getBaseUrl();
        
        Zend_Loader::loadClass('Guestticket');
    }
    
  public function indexAction()
  {
    $this->view->assign('title', 'Home');
	$this->view->assign('wellcome','Witaj na naszej stronie! Użytkownik niezalogowany może TUTAJ wysłać ticket. Aby wysłać ticket ze swojego konta musisz się zalogować.');
	$this->view->assign('webmaster','Seik');
  }
  
  public function addAction() 
  {
      $this->view->assign('title','Dodaj Ticket');
      
      
  }
    
}
?>
