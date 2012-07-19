<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<title>CMLAC Calendar</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type"text/css" href="<?php echo base_url()?>css/cmlac_style.css " />
		<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	</head>
	<body>
		<?php echo $calendar; ?>
		<script type="text/javascript">
			$(document).ready(function()
				{
					$('.calendar .day').click(function()
						{
							day_num = $(this).find('.day_num').html();
							day_data = prompt('Enter Event Name', $(this).find('.content').html());
							if(day_data != null)
								{
									$.ajax({
										url: window.location,
										type: 'POST',
										data: {
												day: day_num,
												data: day_data
												},
										success: function(msg)
											{
												location.reload();
											}
										});
								}
						});
				});
		</script>
	</body>
</html>