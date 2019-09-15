<?php include('head.php');?>
<?php include('home.php');?>
<style>
    .col-lg-10{
        margin-top: 20px;
        margin-bottom: 30px;
    }
</style>
<div class="container">
			<div class="row">
				<div class="col-lg-10">
					<div class="contact_form_container">
						<div class="contact_form_title">Register For Event</div>
						<form action="event_registration_api.php" class="contact_form" id="contact_form" method="post">
							<input type="text" name="name" class="contact_input" placeholder="Name" required="required">
							<input type="email" name="email" class="contact_input" placeholder="E-mail" required="required">
                            <input type="text" name="rollno" class="contact_input" placeholder="Roll Number" required="required">
                            <input type="number" name="mobile" class="contact_input" placeholder="Mobile Number" required="required">
                            <select name="eventname" class="contact_input" >
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
                            <select name="department" class="contact_input">
                            <option>Select Department</option>
                                <option>FCA</option>
                                <option>LAW</option>
                                <option>CSE</option>
                            </select>
							<input type="submit" name="submit" value="Register" class="button contact_button">
						</form>
					</div>
                    
				</div>
				
				</div>
    
			</div>

<?php include('footer.php');?>