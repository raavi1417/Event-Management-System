<?php include('head.php');
session_start();?>
<?php include('admin_nav.php');?>
<style>
    .container{
        margin-top: 50px;
        width: 80%;
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
          <th>Status</th>
          <th>Status</th>
          
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
    if(mysqli_num_rows($res)==true){
        while($row=mysqli_fetch_assoc($res)){
            $name=$row['name'];
            $rollno=$row['rollno'];
            $email=$row['email'];
            $status=$row['status'];
            ?>
            <td><?=$name;?></td>
            <td><?=$email;?></td>
            <td><?=$rollno;?></td>
            <td>
                <?php 
                  if($row['status']==1)
                    {
                     echo "<p id=str".$row['rollno'].">Allow</p>"  ;
                    }
                 else{
                   echo "<p id=str".$row['rollno'].">Deny</p>";
                     }
                 ?>
             </td>
                  <td>
                     <select onchange="active_disactive_user(this.value,<?php echo $row['rollno'];?>)">
                     <option>Select Status</option>
                     <option value="1" >Allow</option>
                     <option value="0">Deny</option>
                    </select>         
                   </td>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  function active_disactive_user(val,rollno){
      $.ajax({
          method:'POST',
          url:'change.php',
          data:{val:val , rollno:rollno},
          success:function(result){
              if(result==1){
                  $('#str'+rollno).html('Allow');
              }
              else{
                    $('#str'+rollno).html('Deny');
              }
          }
      });
  }
</script>