<?php include('head.php');?>

<?php
error_reporting(0);
session_start();
?>
<?php include('admin_nav.php');?>
    <h1 align="center">Admin Information</h1><hr style="background-color:black; margin-left:30px; margin-right:30px;">

<?php 
session_start();
if(isset($_SESSION['ip'])):?>
<?php 
include('connection/database.php');
$qry="select * from admin";
$res=mysqli_query($conn,$qry);
if(mysqli_num_rows($res)==true){
    while($row=mysqli_fetch_assoc($res)):{
        
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $department=$row['department'];
}
?><div class="container">
<h3><?=$name;?></h3>
<h3><?=$email;?></h3>
<h3><?=$mobile;?></h3>
    <h3><?=$department;?></h3><hr></div>
<?php endwhile;}?>
<?php	
else:
?>
<script>
	location.href="admin_login.php";
</script>
<?php 
endif;
?>