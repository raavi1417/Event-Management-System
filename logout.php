<?php 
session_start();
unset($_SESSION['name']);
unset($_SESSION['ip']);
unset($_SESSION['email']);
unset($_SESSION['mobile']);
session_destroy();
header("location:index.php");

?>

<script>
alert("logout Success")
location.href("index.php")
	</script>
    