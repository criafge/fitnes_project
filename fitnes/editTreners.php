<?php 	
include("header.php");
$con = mysqli_connect('localhost', 'root', '', 'fitness');
$sql_query = 'select id_user, surname, name, patromymic, photo, phone, awards from users where role=2';
$result = mysqli_query($con, $sql_query);
 

$query_first_id = "select id_user from users where role=2 limit 1";
$result_first_id = mysqli_fetch_array(mysqli_query($con, $query_first_id));

$trener_id = !empty($_GET['trener'])?$_GET['trener']:$result_first_id['id_user'];	
$trener_info = mysqli_fetch_array(mysqli_query($con,"select * from users where id_user=$trener_id"));

 ?>

 

 <div class="container">
 	<div class="list-trener">
 		<?php 	
 		while($trener = mysqli_fetch_array($result)){
 			?>
 			    <div class="trener-item">
 			    	<input type="text" name="trener_id" value='<?=$trener_id?>' style='display:none;'>
 			    	<p><?=$trener['surname']." ".$trener['name'];?></p>
 			    	<a href="?trener=<?=$trener['id_user'];?>"><button class="btn btn-edit">Редактировать</button></a>
 			    	<a href="/delete.php?trener=<?=$trener['id_user'];?>"><button  class="btn btn-delit">Удалить</button></a>
 			    </div>
 			<?php
 		}
 	?>
 	</div>

 	<div class="form-edit">
 		<div class="container flex-column-center">
 			<h2>Редактировать тренера</h2>

 			<form action="/edit.php" method="POST" enctype="multipart/form-data">

 				 <input type="text" name="trener_id" value='<?=$trener_id?>' style='display:none;'>
 				 
 				<div class="input-group"><label for="surname">Введите фамилию</label><input value="<?=$trener_info['surname'];?>" id="surname" type="text" name="surname"></div>
		 		<div class="input-group"><label for="name">Введите имя</label><input value="<?=$trener_info['name'];?>" id="name" type="text" name="name"></div>
		 		<div class="input-group"><label for="patronymic">Введите отчество</label><input value="<?=$trener_info['patromymic'];?>" id="patronymic" type="text" name="patronymic"></div>
		 		<div class="input-group"><label for="birthday">Введите день рождения</label><input value="<?=$trener_info['patromymic'];?>" id="birthday" type="date" name="birthday" value="<?=$trener_info['birthday'];?>"></div>
		 		<div class="input-group"><label for="phone">Введите номер телефона</label><input value="<?=$trener_info['phone'];?>" id="phone" type="text" name="phone"></div>
		 		<div class="input-group"><label for="photo">Выберите фото</label><input value="<?=$trener_info['photo'];?>" id="photo" type="file" name="photo"></div>
		 		<label for="#" style="margin: 5px;">Выберите пол</label>
		 		<div class="input-group i-g-radio">
		 			<label for="g-m">М</label><input id="g-m"  type="radio" name="gender" value="m" <?=($trener_info["gender"]=="m")?"checked":"";?>>
		 			<label for="g-w">Ж</label><input id="g-w"  type="radio" name="gender" value="w" <?=($trener_info["gender"]=="w")?"checked":"";?>>
		 		</div>
		 		<div class="input-group"><label for="password">Введите пароль</label><input id="password" type="password" name="password" value="<?=$trener_info['password'];?>"></div>
		 		<div class="input-group"><label for="awards">Введите награды</label><input id="awards" type="text" name="awards" value="<?=$trener_info['awards'];?>"></div>
		 		<div class="input-group"><input type="submit" value="Сохранить" ></div>
 			</form>
 		</div>
 	</div>
 </div>

 <script type="text/javascript">
 	function editTrener(trener_id){
 		console.log(trener_id);
 	}
 </script>