<?php
	class users extends CI_Controller{

		function index(){
			$this->load->model('user_m')

			var_dump($this->user_m->gets());
		}
		function add(){}
		function dell($id){}
		function edit($id){}
		function detail($id){}

	}