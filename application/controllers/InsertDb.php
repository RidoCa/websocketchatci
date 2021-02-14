<?php
defined('BASEPATH') or exit('No direct script access allowed');
class InsertDb extends CI_Controller
{

    function __construct(){
		parent::__construct();		
		$this->load->model('CrudModel');
	}

    public function index(){
		$data['all'] = $this->db->query("SELECT * from room")->result_array();
		$this->load->view('welcome_message', $data);
    }

    public function signin()
    {
        // print_r($this->input->post('id_room'));
            $room = trim($this->input->post('id_room'));
            $sender = trim($this->input->post('id_sender'));
            $msg = trim($this->input->post('msg'));

            $data = array(
                'id_room' => $room,
                'id_sender' => $sender,
                'msg' => $msg,
            );

            $this->CrudModel->input_data($data, 'room');

            //set page header as json format
           
    }

    public function lihatData(){
        return $this->CrudModel->show_data("1", 'room');
    }

}
