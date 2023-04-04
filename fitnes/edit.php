<?php 	
$con = mysqli_connect('localhost', 'root', '', 'fitness');
if (!empty($_FILES["photo"]["tmp_name"])) { 
		$tmp_name = $_FILES['photo']['tmp_name'];
		$photo_name = $_FILES['photo']['name'];	
		$name2 = 'img/'	. $_FILES["photo"]["name"];
		move_uploaded_file($tmp_name, $name2);
	


	if (!empty($_POST)){
		$surname = $_POST['surname'];
		$name = $_POST['name'];
		$patronymic = $_POST['patronymic'];
		$birthday = $_POST['birthday'];
		$gender = $_POST['gender'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		// trener1
		$photo = $photo_name;  
		$awards = $_POST['awards'];
		$created_at = date('y-m-d h:i:s');
		$trener_id = $_POST['trener_id'];


		$query = "update users Set name='$name', surname='$surname', patromymic='$patronymic', birthday='$birthday', gender='$gender', password='$password', phone='$phone', photo='$photo', awards='$awards', created_at='$created_at' where users.id_user='$trener_id'";
		$result_edit = mysqli_query($con, $query);

		if ($result_edit) {
			echo  "<script>
						alert('Запись редактирована');
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
}
 ?>