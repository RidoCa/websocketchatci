<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CrudModel extends CI_Model {

    function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function show_data($id,$table){
        $this->db->get_where($table, array('id_room' => $id));
    }

}
