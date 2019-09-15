<?php include('head.php');?>

<?php include('home.php');?>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email="raavi2555@gmail.com";
  $subject=$_POST['subject'];
	$comment=$_POST['comment'];
	$to=$_POST['to'];
		$header="from:$name<$email>";
	$message="name:$name\n\n Email:$email \n\nSubject:$subject\n\n Comment:$comment";
	if(mail($to,$subject,$message,$header))
	{
		echo"sent";
	}
	else
	{
		echo"not sent";
	}
}
?>

	<!-- Contact -->

	<div class="contact">
	
		<div class="container">
			<div class="row">
				<div class="col-lg-10">
					<div class="contact_form_container">
						<div class="contact_form_title">Contact Us</div>
						<form action="#" class="contact_form" id="contact_form" method="post">
							<input type="text" class="contact_input" placeholder="Name" required="required" name="name">
							<input type="email" class="contact_input" placeholder="E-mail" required="required" name="to">
							<input type="text" class="contact_input" placeholder="Subject" required="required" name="subject">
							<textarea name="contact_textarea" id="contact_textarea" class="contact_textarea contact_input" placeholder="Message" required="required" name="comment"></textarea>
							<button class="button contact_button" name="submit"><span>Send Message</span></button>
						</form>
					</div>
				</div>
				
				</div>
			</div>
		</div>
	

	<?php include('footer.php');?>