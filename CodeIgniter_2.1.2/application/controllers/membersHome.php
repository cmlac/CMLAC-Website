<?php
	class MembersHome extends CI_Controller
	{
		function index ()
		{
			$this->home();
		}
		public function home()
		{
			$this->load->view("members_header_view");
			$this->load->view("members_nav_view");
			$this->load->view("members_content_view");
			$this->load->view("members_footer_view");
		}
	}