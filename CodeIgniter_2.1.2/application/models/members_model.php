<?php
	class Members_model extends CI_Model{
		function getNews()
			{
				$query = $this->db->get("club_news",);
				return $query->result();
			}
	
	}

?>