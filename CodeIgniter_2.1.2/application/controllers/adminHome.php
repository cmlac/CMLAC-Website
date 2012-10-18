<?php
	class AdminHome extends CI_Controller
	{
		function index ()
		{
			$this->home();
		}
		public function home()
		{
			$this->load->view("admin_header_view");
			$this->load->view("admin_nav_view");
			$this->load->view("admin_content_view");
			$this->load->view("admin_footer_view");
		}
	}