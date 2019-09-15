<?php
session_start();
include('connection/database.php');
extract($_POST);
if(isset($add)){
    $eventid="event".rand();
    $eventname=mysqli_real_escape_string($conn,$eventname);
    $organizor_dept=mysqli_real_escape_string($conn,$organizor_dept);
    $event_topic=mysqli_real_escape_string($conn,$event_topic);
    $event_venue=mysqli_real_escape_string($conn,$event_venue);
    $date=mysqli_real_escape_string($conn,$date);
    $image=$_FILES['image']['name'];
	$ar=explode(".",$image);
	$ext=strtolower(end($ar));
	$image="images/".rand().".".$ext;
    //echo $image;
	if(move_uploaded_file($_FILES['image']['tmp_name'], $image)){
        $qry="insert into event set eventid='$eventid',eventname='$eventname',organizor_dept='$organizor_dept',event_topic='$event_topic',event_venue='$event_venue',image='$image',date='$date'";
        
        $res=mysqli_query($conn,$qry);
        if($res==true){
            ?>
      <script>
      alert("Successfully Create");
      location.href="admin_home.php";    
      </script>
          <?php
        }
        else{
             ?>
      <script>
      alert("Error");
      //location.href="admin_home.php";    
      </script>
          <?php
        }
    }
        
}
?>