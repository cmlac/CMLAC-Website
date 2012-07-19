<?php
	class cmlacCal extends CI_Controller
	{
		function display($year  = null, $month = null)	
		{
			if(!$year)//if year and month is null, use todays year and month, 
						//otherwise error when trying to pass NULL
			{
				$year = date('Y');
			}
			if(!$month)
			{
				$month = date('m');
			}
			$this->load->model('Calendar_model');
			
			if ($day = $this->input->post('day'))
				{
					$this->Calendar_model->add_calendar_event(
						"$year-$month-$day", 
						$this->input->post('data')
					);
				}
			
			$data['calendar'] = $this->Calendar_model->generate($year, $month);
			
			$this->load->view('cal_view', $data);
		}
	}
?>