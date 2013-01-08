<?php defined('SYSPATH') or die('No direct script access.');
  

  
  
   
  
    class Controller_Ajax extends Controller_Template 
  {
  
      public $template = 'main/ajax';
  
      public function before()
      {
          parent::before();
      }
      
      public function after()
      {
		  parent::after();
      }
      
      
        	public function action_home()
		{
	
		  	$doget                            = new Model_Get();
		    $get                              = array();
		
		    $get['urlink']                    = $doget->GetALink();
		    $this->template->content          = View::factory('page/oget', $get);
	    
	    }


  }
  