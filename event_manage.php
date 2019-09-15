<?php 
session_start();
if(isset($_SESSION['ip'])):?>
<?php include_once('head.php');?>
<style>
    body{
        background-color:whitesmoke;
    }
    th{
        color: black;
    }
    img{
        width: 50px;
        border-radius: 40px;
    }
</style>
<?php
  include('connection/database.php');
  if(isset($_GET['action']) && $_GET['action']='delete_event'){
    @$eventid=$_GET['eventid'];
    $q=mysqli_query($conn,"DELETE FROM event WHERE eventid='$eventid'");
  }
 ?>
<body>
    <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div>
										<a href="admin_home.php">
											<div class="logo_container d-flex flex-row align-items-start justify-content-start">
												<div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
												<div class="logo_content">
													<div id="logo_text" class="logo_text logo_text_not_ie">EVENT MANAGEMENT SYSTEM</div>
													
												</div>
											</div>
										</a>	
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
<div class="row">
                <div class="col-lg-12">
                    
                  <div class="container">
                       <table class="table table-hover">
    <thead>
      <tr>
        <th>Event Id</th>
        <th>Event Name</th>
        <th>Image</th>
        <th>Organizor Department</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
        include('connection/database.php');              
        $qry="select * from event";
        $res=mysqli_query($conn,$qry);
                    if(mysqli_num_rows($res)==true){
                         while($row=mysqli_fetch_assoc($res)):{
                             $eventid=$row['eventid'];
                             $eventname=$row['eventname'];
                             $organizor_dept=$row['organizor_dept'];
                             $image=$row['image'];
                             }
                       ?>
        <tr>
        <td><?=$eventid;?></td>
        <td><?=$eventname;?></td>
        <td><img src="<?=$image;?>"></td>
        <td><?=$organizor_dept;?></td>
        <td>
            <a href="event_edit.php? action=edit_event & eventid=<?=$eventid;?>" class="btn btn-success btn-xs" ><span class="glyphicon glyphicon-pencil"></span> Edit</a>
			<a href="event_manage.php? action=delete_event & eventid=<?=$eventid;?>" class="btn btn-danger btn-xs" ><span class="glyphicon glyphicon-trash"></span> Delete</a>
		</td>
      </tr>
        <?php endwhile;}?>
     
    </tbody>
  </table>
</div> 
        </div>
    </div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<?php	
else:
?>
<script>
	location.href="admin_login.php";
</script>
<?php 
endif;
?>