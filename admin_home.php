<?php include('head.php');
session_start();
if(!isset($_SESSION['ip'])){
    header("location:admin_login.php");
}
?>
<style>
    .img{
        margin-left: 20px;
        margin-right: 20px;
        margin-bottom: 40px;
    
    }
    .text h1{
        font-size: 30px;
        text-align: center;
        color: black;
    }
    .text h2{
        margin-top: 20px;
        text-align: center;
        color: black;
        margin-bottom: 20px;
    }
    hr{
        margin-left: 25px;
        margin-right: 25px;
        background-color: black;
    }

</style>
<?php include('admin_nav.php');?>
<div class="text">
    <h1>Manav Rachna International Institute Of Research & studies</h1><hr>
    <h2>Admin Section</h2>
</div>
<div class="img">
    <img src="images/event_11.jpg" width="100%" height="300px">
</div>
<div class="intro">
		<div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

			<!-- Intro Item -->
			<div class="intro_item">
				
				<div class="intro_body">
					<div class="intro_title"><a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Create Event </a></div>
                    
					
				</div>
			</div>

			<!-- Intro Item -->
			<div class="intro_item">
				
				<div class="intro_body">
					<div class="intro_title"><a href="event_manage.php">Manage Event</a></div>
					
				</div>
			</div>

			<!-- Intro Item -->
			<div class="intro_item">
				
				<div class="intro_body">
					<div class="intro_title"><a href="all_event.php">Event Information</a></div>
					
				</div>
			</div>

			<!-- Intro Item -->
			<div class="intro_item">
				
				<div class="intro_body">
					<div class="intro_title"><a href="enroll_student.php">Enroll Student</a></div>
					
				</div>
			</div>

			<!-- Intro Item -->
			<div class="intro_item">
				
				<div class="intro_body">
					<div class="intro_title"><a href="contact_info.php">Contact Information</a></div>
					
				</div>
			</div>

			<!-- Intro Item -->
            <div class="intro_item">
				
				<div class="intro_body">
					<div class="intro_title"><a href="enroll.php">Certificate Verify Section</a></div>
					
				</div>
			</div>
			

		</div>
	</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="add_event_api.php">
         
            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Event Name</label>
            <input type="text" name="eventname" class="form-control" id="recipient-name">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Event Organizor Department</label>
            <input type="text" name="organizor_dept" class="form-control" id="recipient-name">
          </div>
             <div class="form-group">
            <label for="recipient-name" class="form-control-label">Event Date</label>
            <input type="datetime-local" name="date"  class="form-control" id="recipient-name">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Event Image</label>
            <input type="file" name="image"  class="form-control" id="recipient-name">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="form-control-label">Event Topics </label>
           <textarea class="form-control" id="message-text" name="event_topic"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Event Venue:</label>
            <textarea class="form-control" id="message-text" name="event_venue"></textarea>
          </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-primary" name="add" value="Create Event">
         
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

<?php include('footer.php');?>