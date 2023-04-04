<?php 	
$con = mysqli_connect('localhost', 'root', '', 'fitness');
$sql_query = 'select `surname`, `name`, `patromymic`, `photo`, `phone` from `users` where role=1';
$result = mysqli_query($con, $sql_query);
 ?>

 <div class="cards">
 	<?php 	
 		while($user = mysqli_fetch_array($result)){
 			?>
 			    <div class="card">
 			    	<div class="img_container">
 			    		<img src="/img/<?=$user['photo'];?>" alt="<?=$user['name'];?>">
 			    	</div>
    
 			    	<h2><?=$user['surname']." ".$user['name'];?></h2>
 			    	<p><?=$user['phone'];?></p>
 			    	<p><?=$user['awards'];?></p>
 			    	
    
 			    </div>
 			<?php
 		}
 	?>

 </div>
 </body>
</html>