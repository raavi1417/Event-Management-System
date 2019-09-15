<?php include('head.php');
session_start();
?>
<?php 
include('connection/database.php');
include('admin_nav.php');
 if(isset($_GET['action']) && $_GET['action']='edit_event'){
    @$eventid=$_GET['eventid'];
     $q="select * from event where eventid='$eventid'";
     $res=mysqli_query($conn,$q);
     if(mysqli_num_rows($res)==true){
        $row=mysqli_fetch_assoc($res);    
        $eventname= $row['eventname'];
        $organizor_dept= $row['organizor_dept'];
        $event_topic= $row['event_topic'];
        $date=$row['date'];
        $event_venue=$row['event_venue'];
     }
 }
?>             
<?php
include('connection/database.php');
extract($_POST);
if(isset($submit)){
    $eventname=mysqli_real_escape_string($conn,$eventname);
    $organizor_dept=mysqli_real_escape_string($conn,$organizor_dept);
    $event_topic=mysqli_real_escape_string($conn,$event_topic);
    $event_venue=mysqli_real_escape_string($conn,$event_venue);
    $date=mysqli_real_escape_string($conn,$date);
    $image=$_FILES['image']['name'];
	$ar=explode(".",$image);
	$ext=strtolower(end($ar));
	$image="images/".rand().".".$ext;
    echo $image;
	if(move_uploaded_file($_FILES['image']['tmp_name'], $image)){
        $qry="update event set eventname='$eventname',organizor_dept='$organizor_dept',event_topic='$event_topic',event_venue='$event_venue',image='$image',date='$date'";
        
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
    
}

>
                           <div class="container">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Event Name</label>
                                                <input type="text" 
                                                    name="eventname"
                                                    class="form-control" value="<?= $eventname;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Organizor Department</label>
                                                <input type="text" 
                                                  name="organizor_dept"
                                                  class="form-control" value="<?=$organizor_dept;?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="datetime-local" class="form-control" min="2019-04-01T00:00" max="2019-05-01T00:00" name="date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" class="form-control" 
                                                name="image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                                <label>Venue</label>
                                                <input type="text" class="form-control" 
                                                name="event_venue"
                                                value="<?=$event_venue;?>">
                                            </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Event Topic</label>
                                                <textarea rows="5" class="form-control" name="event_topic">
                                                    <?=$event_topic;?>
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-info btn-fill pull-right" name="submit">
                                    <div class="clearfix"></div>
                                </form>
                            </div>