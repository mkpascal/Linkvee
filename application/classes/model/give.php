<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Give extends Kohana_Model
{
		 
		public function addLink($link)
		 {
		
				function getTitle($link)
				{	
						$file = file($link);
						$file = implode("",$file);
					
						if(preg_match("/<title>(.+)<\/title>/i",$file,$m))
						    return $m[1];
						else
						    return $link;
				 }
		
		$title = getTitle($link);
		   
		   
	 	$tags = get_meta_tags($link);
		
			if (isset($tags['description']))
			{
			   $content = $tags['description'];
			}
			else
			{
			   $content = $title;
			}
		
		$link = HTML::chars($link);
		
		$title = HTML::chars($title);
		$content = HTML::chars($content);
		
		 $ip=$_SERVER['REMOTE_ADDR'];
		 $date=time();
		 
		$spam="0";
		
		    DB::insert('links', array('link','timestamp','title','content','spam','ip'))
		      ->values(array($link, $date, $title, $content, $spam, $ip))
		      ->execute();
		      
		}

}


