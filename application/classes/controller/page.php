<?php defined('SYSPATH') or die('No direct script access.');
  
  class Controller_Page extends Controller_Central {
  
	  	public function action_home()
	  	{
	  		$this->template->title = __('Linkvee - Home - www.linkvee.com');
	  		
	  		$this->template->content = View::factory('page/home');
	  	}
	  	
	  	
	  	public function action_get()
		{
	
		  	$doget                            = new Model_Get();
		    $get                              = array();
		
		    $get['urlink']                    = $doget->GetALink();

	  		$this->template->title = __('Linkvee - Get a link - www.linkvee.com');

		    $this->template->content          = View::factory('page/get', $get);
	    
	    }
	    
	    private function _addLink($link, $resp)
	    {
			   $post = new Model_Give();
			
			   if(empty($link))
			    {
			       return(array('error' => 'Please enter a link.'));
			    }
			    
			    @$headers = get_headers($link); 
					if (preg_match('/^HTTP\/\d\.\d\s+(200|301|302)/', $headers[0])){}
					else {
					       return(array('error' => 'Unreacheable link.'));
					}
			  
			  require_once('application/config/recaptchalib.php');
			
			  $privatekey = "RECAPTCHA";
			 
			  $resp = recaptcha_check_answer ($privatekey,
			                                $_SERVER["REMOTE_ADDR"],
			                                $_POST["recaptcha_challenge_field"],
			                                $_POST["recaptcha_response_field"]);
			
				  if (!$resp->is_valid) {
						return(array('error' => 'Captcha invalid.'));
				  } else {
						$cap = "ok";
				  }
			
			   		$post->addLink($link);
			   
			   return TRUE;
		 }
	 
	 
		 public function action_give()
	  	 {
		     $posts                            = new Model_Give();
		
		     $lv                              = array();
		     $lv['msg']                       = "";
		
		     if($_POST)
		      {
			         $ret = $this->_addLink((isset($_POST['link']) ? $_POST['link'] : ""),
			                               (isset($_POST['resp']) ? $_POST['resp']  : ""));
			
				         if(isset($ret['error']))
				          {
				             $lv['msg'] = $ret['error'];
				          }
				         else
				          {
				             $lv['msg'] = 'Your link has been successfully sent.';
				          }
		      }
		

	  		$this->template->title = __('Linkvee - Give a link - www.linkvee.com');
		
		     $this->template->content = View::factory('page/give', $lv);
	  }


 public function action_report($id)
	  	 {
	  	 
	  	 	 $id = $this->request->param('id');
	  	 	 

		  	$doreport                            = new Model_Report();
		    $rrpo                                = array();
		
		    $get['rrpo']                    = $doreport->DoReport($id);
		    
		    	  	 	 
	  	 	 $report = array();
	  	 	 $report['id']                       = $id;
	  	 	 

	  		$this->template->title = __('Linkvee - Report a link - www.linkvee.com');
		     
		     $this->template->content = View::factory('page/report', $report);
	     }

 public function action_legal()
	  	 {
	  	 
	  	 
	  		$this->template->title = __('Linkvee - Legal notice - www.linkvee.com');
		     
		     $this->template->content = View::factory('page/legal');
	     }    

 public function action_error()
	  	 {
	  	 
	  	 
	  		$this->template->title = __('Linkvee - Error - www.linkvee.com');
		     
		     $this->template->content = View::factory('page/error');
	     }    

 public function action_api()
	  	 {
	  	 
	  	 
	  		$this->template->title = __('Linkvee - API - www.linkvee.com');
		     
		     $this->template->content = View::factory('page/api');
	     }
	     	     
 public function action_admin()
	  	 {
	  	 
	  	 $ip=$_SERVER['REMOTE_ADDR'];
	  	 
			if($ip!="127.0.0.1")
			{
				die;
			}
	  	 
 	        $doget                            = new Model_Admin();
		    $get                              = array();
		
		    $get['admin'] = $doget->GetAdmin();

	  		$this->template->title = __('Linkvee - Admin - www.linkvee.com');

		    $this->template->content          = View::factory('page/admin', $get);
	     }       
    
   public function action_reportadmin($id)
	  	 {
	  	 
	  	 
	  	 
	  	 
	  	  $ip=$_SERVER['REMOTE_ADDR'];
	  	 
			if($ip!="127.0.0.1")
			{
				die;
			}
			
	  	 	 $id = $this->request->param('id');
	  	 	 

		  	$doreport                            = new Model_ReportAdmin();
		    $rrpo                                = array();
		
		    $get['rrpo']                    = $doreport->DoReport($id);
		    
		    	  	 	 
	  	 	 $report = array();
	  	 	 $report['id']                       = $id;
	  	 	 

	  		$this->template->title = __('Linkvee - Report a link - www.linkvee.com');
		     
		     $this->template->content = View::factory('page/reportadmin', $report);
	     }


  } 