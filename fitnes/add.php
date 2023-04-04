<?php 	
	$con = mysqli_connect('localhost', 'root', '', 'fitness');
	if ($_FILES && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
		$tmp_name = $_FILES['photo']['tmp_name'];
		$name1 = $_FILES['photo']['name'];	
		$name2 = 'img/'	. $_FILES["photo"]["name"];
		move_uploaded_file($tmp_name, $name2);
	}


	if (!empty($_POST)){
		$surname = $_POST['surname'];
		$name = $_POST['name'];
		$patronymic = $_POST['patronymic'];
		$birthday = $_POST['birthday'];
		$gender = $_POST['gender'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$photo = $name1;
		$awards = $_POST['awards'];
		$created_at = date('y-m-d h:i:s');

		$query = "insert into users (id_user, name, surname, patromymic, phone, password, photo, awards, created_at, birthday, gender, role) values(null, '$name', '$surname', '$patronymic', '$phone', '$password', '$photo','$awards', '$created_at', '$birthday', '$gender', 2)";
		$result_edit = mysqli_query($con, $query);

		if ($result_edit) {
		echo  "<script>
					alert('Запись добавлена');
					location.href='/';
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

 ?>