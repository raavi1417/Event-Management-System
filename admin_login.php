<?php include('head.php');?>
<style>
    .col-lg-8{
        margin-top: 100px;
        margin-left: 100px;
    }
</style>
<body>
    <?php 
    session_start();
    include_once('connection/database.php');
    extract($_POST);
    if(isset($submit)){
       $userid=mysqli_real_escape_string($conn,$userid);
       $password=sha1(mysqli_real_escape_string($conn,$password));
        $qry="select * from admin where userid='$userid' AND password='$password'";
        $res=mysqli_query($conn,$qry);
        if(mysqli_num_rows($res)>0){
                $row=mysqli_fetch_assoc($res);
                $_SESSION['ip']=$_SERVER['REMOTE_ADDR'];
                $_SESSION['name']=$row['name'];
                $_SESSION['email']=$row['email'];
                $_SESSION['mobile']=$row['mobile'];
            ?>
                <script>
					alert("Login Success")
					location.href="admin_home.php";
				</script>
    <?php
            
            
        }
       else{
           ?>
          <script>
					alert("Login Failed")
					location.href="admin_login.php";
				</script>
    <?php
       }
    }
?>
<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="contact_form_container">
						<div class="contact_form_title">Admin Login</div>
<form class="contact_form" id="contact_form" method="post" enctype="multipart/form-data">
<input type="text" name="userid" class="contact_input" placeholder="Enter Your User Id" required="required">
<input type="password" name="password" class="contact_input" placeholder="Enter Password" required="required" name="password">
<input type="submit" name="submit" value="Login" class="button contact_button">
</form>
					</div>
                    
				</div>
				
				</div>
   </div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>

