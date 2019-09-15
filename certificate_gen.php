<?php include('head.php');?>
<?php include('header_top.php');?>
<style>

    .container{
      
        margin-top: 40px;
        margin-left: 290px;
        width: 80%;
        height: 80px;
    }
    .col-sm-3 my-1{
        margin-top: 20px;
    }
    .alert alert-danger{
     margin-top: 50px;
    }
   
</style>


    <div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="contact_form_container">
						<div class="contact_form_title">E-Certification Section</div>
<form class="contact_form" id="contact_form" method="post" enctype="multipart/form-data" action="certificate_gen_api.php">
<input type="text" name="email" class="contact_input" placeholder="Enter Your Email" required="required">
<input type="text"  class="contact_input" placeholder="Enter Roll No." required="required" name="rollno">
<input type="submit" name="submit" value="Click Here" class="button contact_button">
</form>
					</div>
                </div>
        </div>
</div>