<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>


<form id="form_reg" action="/registration.php" method="POST" enctype="multipart/form-data">
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

 		<div class="input-group"><label for="password_conf">Повторите пароль</label><input required id="password_conf" name="password_conf" type="password"><span class="error_form" id="error_pass"></span></div>
 		
 		<div class="input-group"><input type="submit" value="Добавить" ></div>
</form>

<script>
    let confirm_pass = document.getElementById("password_conf");
    let pass = document.getElementById("password");
    let form = document.getElementById("form_reg");

    // console.log(confirm_pass.value);
    form.addEventListener("submit", function(event){
     	if (confirm_pass.value!=pass.value){
     		event.preventDefault();
     		document.getElementById("error_pass").innerText = "Пароли не совпадают";
     		
     	}
     })

</script>