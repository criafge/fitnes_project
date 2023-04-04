<?php 	
$con = mysqli_connect('localhost', 'root', '', 'fitness');
$trener_id = $_GET['trener'];
$query = "delete from users where users.id_user='$trener_id'";
$result_edit = mysqli_query($con, $query);

		if ($result_edit) {
			echo  "<script>
						alert('Запись удалена');
						// location.href='/';
					</script>";
					var_dump($query);
		}
		else{
			echo " <script>
						alert('ошибка');
					</script>";
			echo mysqli_error($con);
			echo $query;
		}
 ?>