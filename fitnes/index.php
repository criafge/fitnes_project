<?php 	
include("header.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  
// выдает ошибку из самой бд
$con = mysqli_connect('localhost', 'root', '', 'fitness');
$sql_query = 'select `surname`, `name`, `patromymic`, `photo`, `phone`, `awards` from `users` where role=2';
$result = mysqli_query($con, $sql_query);
 ?>

 <div class="cards">
 	<?php 	
 		while($trener = mysqli_fetch_array($result)){
 			?>
 			    <div class="card">
 			    	<div class="img_container">
 			    		<img src="/img/<?=$trener['photo'];?>" alt="<?=$trener['name'];?>">
 			    	</div>
    
 			    	<h2><?=$trener['surname']." ".$trener['name'];?></h2>
 			    	<p><?=$trener['phone'];?></p>
 			    	<p><?=$trener['awards'];?></p>
 			    	
    
 			    </div>
 			<?php
 		}
 	?>

 </div>
 </body>
</html>