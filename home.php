	<div class="home">
		<!-- <div class="home_background" style="background-image: url(images/index.jpg)"></div> -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/index.jpg" data-speed="0.8"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
			<?php include('header_top.php');?>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul>
													<li class="active"><a href="index.php">Home</a></li>
                                                   
													<li><a href="aboutus.php">About Us</a></li>
                                                    <li><a href="certificate_gen.php"> Your Certificate</a></li>
                                                    <li><a href="contact.php">Contact</a></li>
                                                    <li><a href="admin_login.php">Adminstrator</a></li>
												</ul>
											</nav>
											<div class="header_extra ml-auto">
												
												<div class="button header_button"><a  href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Registration For Event!</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
					</div>
				</div>	
			</div>
		</header>

		
	</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="event_registration_api.php">
         
            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Student Name</label>
            <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Enter Your Name">
          </div>
             <div class="form-group" >
                   <label for="recipient-name" class="form-control-label">Select Event</label>
              <select name="eventname" class="form-control" id="recipient-name">
                                 <option>Select Event</option>
                                <?php 
                                include('connection/database.php');
                                $res=mysqli_query($conn,"select eventname from event");
                                if(mysqli_num_rows($res)==true){
                                    while($row=mysqli_fetch_assoc($res)):{
                                        $eventname=$row['eventname'];
                                }
                                ?>
                            <option><?=$eventname;?></option>
                            <?php endwhile;}?>
                            </select>
            </div>    
         
            <div class="form-group">
            <label for="recipient-name" class="form-control-label"> Department</label>
                <select name="department" class="form-control" id="recipient-name">
                    <option>Select Department</option>
                    <option>FCA</option>
                    <option>Dental</option>
                    <option>CSE</option>
                    <option>Law</option>
                </select>
          </div>
             <div class="form-group">
            <label for="recipient-name" class="form-control-label">Semester</label>
            <input type="number" name="semester"  class="form-control" id="recipient-name" placeholder="Enter Semester" required>
          </div>
             <div class="form-group">
            <label for="message-text" class="form-control-label">Roll No.</label>
            <input type="text" class="form-control" id="message-text" name="rollno" placeholder="Enter Your Roll No" required>
          </div>
            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Email</label>
            <input type="email" name="email"  class="form-control" id="recipient-name" placeholder="example@gmail.com" required>
          </div>
            <div class="form-group" >
            <label for="recipient-name" class="form-control-label">Mobile </label>
           <input type="text" class="form-control" id="message-text" name="mobile" placeholder="Enter Mobile" required>
          </div>
           
      <div class="modal-footer">
          <input type="submit" class="btn btn-primary" name="add" value="Register">
         
      </div>
        </form>
      </div>
 
    </div>
  </div>
</div>
<script>
$('#exampleModal').on('show.bs.modal', function (event) 
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
)
</script>
