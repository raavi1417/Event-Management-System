<?php 
session_start();
if(isset($_SESSION['ip'])):?>
<?php include('head.php');?>
<?php include('admin_nav.php');?>
<body>
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align:center;">All Event</h1>
                  <div class="container">
                      <table class="table table-hover">
    <thead>
      <tr>
          <th>Event Id</th>
        <th>Event Name</th>
         
          
      </tr>
    </thead>
    <tbody>
        <tr>
<?php 
include('connection/database.php');
$qry="select * from event";
$res=mysqli_query($conn,$qry);
if(mysqli_num_rows($res)==true){
    while($row=mysqli_fetch_assoc($res)):{
        $eventid=$row['eventid'];
        $eventname=$row['eventname'];
        $event_topic=$row['event_topic'];
        $event_venue=$row['event_venue'];
        $organizor_dept=$row['organizor_dept'];
    
}
?>

            <td><?=$eventid;?></td>
             <td><a href="event_info.php?action=event_info & eventid=<?=$eventid;
                 ?>"  ><?=$eventname;?> </a></td>
       </tr>
        <tr>
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