<?php include('head.php');?>
<style>
    .container{
        margin-top: 50px;
        width: 80%;
        border-bottom-color: black;
    }
    .model-footer{
        float: right;
    }
    .form-group{
        width: 50%;
        margin-left: 50px;
    }
    input[type=submit] {
       cursor: pointer;
 }
</style>

<div class="container">
    <form method="post">
    <div class="form-group">
            <label for="message-text" class="form-control-label">Event Name:</label>
        
            <select class="form-control" id="message-text" name="eventname">
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
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" name="click" value="Click">
        </div>
        </div></form>
</div>
<body>
    <div class="row">
                <div class="col-lg-12">
                  <div class="container">
                        <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
           <th>Roll no</th>
          <th>Event Name</th>
          
      </tr>
    </thead>
        <tbody>
         <tr>
<?php 
include('connection/database.php');
extract($_POST);
if(isset($click)){
    $eventname=mysqli_real_escape_string($conn,$eventname);
    $q="select * from register_student where eventname='$eventname'";
    $res=mysqli_query($conn,$q);
    if(mysqli_num_rows($res)){
        while($row=mysqli_fetch_assoc($res)){
            $name=$row['name'];
            $rollno=$row['rollno'];
            $email=$row['email'];
            $eventname=$row['eventname'];
            ?>
            <td><?=$name;?></td>
            <td><?=$email;?></td>
            <td><?=$rollno;?></td>
             <td><?=$eventname;?></td>
       
            
                 
           </tr>
             <?php
    }
 }}
?>
</tbody>
  </table>
</div> 
        </div>
    </div>
</body>
<!--select register_student.name,register_student.rollno,register_student.email,event.eventname,event.date from register_student inner join event on register_student.eventname=event.eventname--!>