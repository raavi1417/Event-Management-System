<style>
   
</style>
<h2 style="margin-left:100px; margin-top:50px;"><font color="black">Events</font></h2>
 <div class="container">
		<hr>
		 <div class="row"> 
<?php
include('connection/database.php');
$q="SELECT * FROM event ORDER BY date;";
$res=mysqli_query($conn,$q);
if(mysqli_num_rows($res)==true){
    while($row=mysqli_fetch_assoc($res)):{
    $eventname=$row['eventname'];
    $image=$row['image'];
}
?>
      <div class="col-md-3">
         <div class="card">
            <img class="card-img-top" src="<?=$image;?>" alt="Card image cap" height="70%" width="100%">
			 <div class="card-body">
            <h5 class="card-title"><a href="#"><?=$eventname;?></a></h5>   </div>   
         </div>
      </div>



<?php endwhile;}?>
        
		</div>
</div>
