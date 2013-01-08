<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Admin extends Kohana_Model
{

    public function GetAdmin()
     {
        $sql = 'SELECT *'."\n".
               'FROM   `links`'."\n".
               "WHERE spam < 15"."\n".
               'ORDER BY `id` DESC'."\n".
               'LIMIT  0, 25';
               
        return $this->_db->query(Database::SELECT, $sql, FALSE)
                         ->as_array();
     }
 }
 