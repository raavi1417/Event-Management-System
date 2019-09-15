<?php
include('connection/database.php');
extract($_POST);
if(isset($add)){
    $name=mysqli_real_escape_string($conn,$name);
    $email=mysqli_real_escape_string($conn,$email);
    $rollno=mysqli_real_escape_string($conn,$rollno);
    $mobile=mysqli_real_escape_string($conn,$mobile);
    $eventname=mysqli_real_escape_string($conn,$eventname);
    $department=mysqli_real_escape_string($conn,$department);
    $semester=mysqli_real_escape_string($conn,$semester);
    
    $check="SELECT rollno,eventname,department,semester FROM register_student WHERE ((rollno='$rollno' OR department='$department' OR semester='$semester') and eventname='$eventname')";
    $fire1=mysqli_query($conn,$check);
     $res=mysqli_fetch_assoc($fire1);
    if($res>0){
       
        
          ?> <script>
         alert("You are already Register")
        window.location.href = 'index.php'; 
         </script>
      
    <?php
        }
        
   
    else{
        $qry="insert into register_student set name='$name',email='$email',rollno='$rollno',mobile='$mobile',eventname='$eventname',semester='$semester',department='$department'";
        $res=mysqli_query($conn,$qry);
        if($res==true){
      ?> <script>
         alert("Thanks For Registration")
         window.location.href = 'index.php';
         </script>
      
    <?php
        }
    }
    
}


?>