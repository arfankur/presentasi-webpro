<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

   private $table = 'category';
   
   public function getCategory()
   {
      return $this->db->get_where($this->table,['is_active' => 'Y'])->result();
   }

}

/* End of file Category_model.php */
