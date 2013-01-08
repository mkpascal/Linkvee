  <?php defined('SYSPATH') or die('No direct script access.');
  
  class Controller_Central extends Controller_Template 
  {
  
      public $template = 'main/template';
  
      public function before()
      {
          parent::before();
  
  	    if ($this->auto_render)
  	    {
  	    	$this->template->title   = '';
  	    	$this->template->content = '';
  			
  		$this->template->styles = array();
  		$this->template->scripts = array();
          			
          }
      }
      
      public function after()
      {
	if ($this->auto_render)
	{
		$styles = array(
			'media/css/reset.css' => 'screen',
			'media/css/layout.css' => 'screen',
			'media/css/blue.css' => 'screen',
		);
  
		$scripts = array(
			'http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js',
		);
		
		$this->template->styles = array_merge( $this->template->styles, $styles );
		$this->template->scripts = array_merge( $this->template->scripts, $scripts );
	}
	parent::after();
      }
  }
  
  