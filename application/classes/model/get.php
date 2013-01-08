<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Get extends Kohana_Model
{

    public function GetALink()
     {
     
     	// RAND() MYSQL HAVE TO BE OPTIMISED ASAP.
     	
        $sql = 'SELECT *'."\n".
               'FROM   `links`'."\n".
               "WHERE spam < 15"."\n".
               'ORDER BY RAND()'."\n". 
               'LIMIT 1';
               
        return $this->_db->query(Database::SELECT, $sql, FALSE)
                         ->current();
     }
 }
 