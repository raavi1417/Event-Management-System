<?php 
session_start();
include('head.php');
include('connection/database.php');
if(isset($_GET['action'] )&& $_GET['action']='event_info'){
    $eventid= $_GET['eventid'];
    $res=mysqli_query($conn,"select * from event where eventid='$eventid'");
    if(mysqli_num_rows($res)==true){
        $row=mysqli_fetch_assoc($res);
        $eventid=$row['eventid'];
        $eventname=$row['eventname'];
        $event_topic=$row['event_topic'];
        $event_venue=$row['event_venue'];
        $organizor_dept=$row['organizor_dept'];
        $image=$row['image'];
    }
}
?>
<?php include('admin_nav.php');?>
<style>
    .container{
        margin-top: 50px;
        margin-left: 80px;
        background-color: blueviolet;
         margin-right: 80px;
    }
    .row{
        color: black;
        font-weight: 600;
        margin-left: 40px;
        margin-top: 20px;
       
    }
</style>
<div class="container">
    <div class="row">
        <label>Event Name:</label>
        <h4><?=$eventname;?></h4>
    </div>
    <div class="row">
    <label>Event Venue:</label>
        <h4><?=$event_venue;?></h4>
    </div>
    <div class="row">
    <label>Department:</label>
        <h4><?=$organizor_dept;?></h4>
        </div>
  

</div>