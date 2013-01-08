<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Report extends Kohana_Model
{

 public function DoReport($id)
     {
        $sql = 'SELECT spam'."\n".
               'FROM   `links`'."\n".
               "WHERE id = ".$id.""."\n".
               'LIMIT 1';
               
        $query = $this->_db->query(Database::SELECT, $sql, FALSE)->current();

        $value = $query['spam'] + 1;

                         
		 $ip=$_SERVER['REMOTE_ADDR'];
		 $date=time();

        $sql = 'SELECT ip'."\n".
               'FROM   `report`'."\n".
               "WHERE ip = '".$ip."'"."\n".
               "AND link_id = ".$id.""."\n".
               'LIMIT 1';
               
        $query = $this->_db->query(Database::SELECT, $sql, FALSE)->current();
        
        
        if($query['ip'] != $ip)
        {

			  DB::insert('report', array('link_id','ip','timestamp'))
		      ->values(array($id, $ip, $date))
		      ->execute();
		      
     		  DB::update('links')->set(array('spam'=>$value))->where('id','=',$id)->execute();

        }
        else
        {

				// spam protection, but we don't tell them.		      
        }
      
      
     }

		 

}


