<!DOCTYPE html>
<html lang="en">
<head>
<title>Events</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Conference project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/events.css">
<link rel="stylesheet" type="text/css" href="styles/events_responsive.css">
</head>
<body>
<?php include('home.php');?>

	<!-- Events -->
 
	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
    <?php 
    include('connection/database.php');
    $q="select * from event";
    $res=mysqli_query($conn,$q);
    if(mysqli_num_rows($res)==true){
        while($row=mysqli_fetch_assoc($res)):
        {
            $eventname=$row['eventname'];
            $event_venue=$row['event_venue'];
            $date=$row['date'];
            $organizor_dept=$row['organizor_dept'];
            
        
    }
    ?>
					<!-- Event -->
					<div class="event">
						<div class="row row-lg-eq-height">
							<div class="col-lg-6 event_col">
								<div class="event_image_container">
									<div class="background_image" style="background-image:url(images/event_9.jpg)"></div>
									
								</div>
							</div>
							<div class="col-lg-6 event_col">
								<div class="event_content">
									<div class="event_title"><?=$eventname;?></div>
									<div class="event_location"><?=$event_venue;?></div>
									
									<div class="event_speakers">
										<!-- Event Speaker -->
										<div class="event_speaker d-flex flex-row align-items-center justify-content-start">
											<div><div>Organizor Department:</div></div>
											<div class="event_speaker_content">
												<div class="event_speaker_name"><?=$organizor_dept;?></div>
												
											</div>
										</div>
										<!-- Event Speaker -->
										<div class="event_speaker d-flex flex-row align-items-center justify-content-start">
											<div><div>Date:</div></div>
											<div class="event_speaker_content">
												<div class="event_speaker_name"><?=$date;?></div>
												
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php endwhile;}?>
	<?php include('footer.php');?>