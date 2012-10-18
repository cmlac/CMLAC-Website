<?php
	class Members_model extends CI_Model{
		function getNews()
			{
				$this->db->select_max('news_date_created'); //gets the latest news
				$query = $this->db->get("club_news",5); //gets the 5 most recent
				return $query->result();
			}
	
	}

?>