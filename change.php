<?php
include('connection/database.php');
$qry=mysqli_query($conn,"update register_student set status='".$_POST['val']."' where rollno='".$_POST['rollno']."'");
if(qry==true){
    $q=mysqli_query($conn,"select * from register_student where rollno='".$_POST['rollno']."'");
    $data=mysqli_fetch_assoc($qry);
    echo $data['status'];
}


?>