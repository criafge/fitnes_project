<?php 
include("header.php");
 ?>

 <div class="container flex-column-center">
 	<h2></h2>
 	<form action="/add.php" enctype="multipart/form-data" method="POST">
 		<div class="input-group"><label for="surname">Введите фамилию</label><input id="surname" type="text" name="surname"></div>
 		<div class="input-group"><label for="name">Введите имя</label><input id="name" type="text" name="name"></div>
 		<div class="input-group"><label for="patronymic">Введите отчество</label><input id="patronymic" type="text" name="patronymic"></div>
 		<div class="input-group"><label for="birthday">Введите день рождения</label><input id="birthday" type="date" name="birthday"></div>
 		<div class="input-group"><label for="phone">Введите номер телефона</label><input id="phone" type="text" name="phone"></div>
 		<div class="input-group"><label for="photo">Выберите фото</label><input id="photo" type="file" name="photo"></div>
 		<label for="#" style="margin: 5px;">Выберите пол</label>
 		<div class="input-group i-g-radio">
 			<label for="g-m">М</label><input id="g-m" value="m" type="radio" name="gender">
 			<label for="g-w">Ж</label><input id="g-w" value="w" type="radio" name="gender">
 		</div>
 		<div class="input-group"><label for="password">Введите пароль</label><input id="password" type="password" name="password"></div>
 		<div class="input-group"><label for="awards">Введите награды</label><input id="awards" type="text" name="awards"></div>
 		<div class="input-group"><input type="submit" value="Добавить" ></div>
 	</form>
 </div> 