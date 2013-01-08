<?php
defined('SYSPATH') or die('No direct script access.');

class Model_ReportAdmin extends Kohana_Model
{

 public function DoReport($id)
     {

		      
     		  DB::update('links')->set(array('spam'=>'15'))->where('id','=',$id)->execute();

     
	}	 

}


