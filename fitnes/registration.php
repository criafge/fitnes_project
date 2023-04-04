<?php 
$con = mysqli_connect('localhost', 'root', '', 'fitness');


if (!empty($_FILES["photo"]["tmp_name"])) { 
		$tmp_name = $_FILES['photo']['tmp_name'];
		$photo_name = $_FILES['photo']['name'];	
		$name2 = 'img/'	. $_FILES["photo"]["name"];
		move_uploaded_file($tmp_name, $name2);

	if (!empty($_POST)){
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$patronymic = $_POST['patronymic'];
		$birthday = $_POST['birthday'];
		$phone = $_POST['phone'];
		$photo = $photo_name;
		$gender = $_POST['gender'];
		$password = $_POST['password'];
		$created_at = date('y-m-d h:i:s');

		$query = "insert into users (id_user, name, surname, patromymic, phone, password, photo, created_at, birthday, gender, role) values(null, '$name', '$surname', '$patronymic', '$phone', '$password', '$photo', '$created_at', '$birthday', '$gender', 1)";
		$result = mysqli_query($con, $query);

		if ($result) {
		echo  "<script>
					alert('Регистрация прошла успешно');
					location.href='/users.php';
				</script>";	
		}
		else{
			echo " <script>
						alert('ошибка');
					</script>";
			echo mysqli_error($con);
			echo $query;
		}
	}
}
 ?>