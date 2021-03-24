<!DOCTYPE html>
<html>
<head>
	<title>Mô phỏng máy tính điện tử</title>
</head>
<body>
	<form class="form" method="post" action="maytinh.php">
		<h1 style="color: red">Mô phỏng máy tính điện tử</h1></br>
		Số Thứ 1 &nbsp; &nbsp;<input type="text" name="num1"><br>
		<br>
		Phép Toán &nbsp;<input type="text" name="pheptoan"><br>
		<br>
		Số Thứ 2 &nbsp; &nbsp;<input type="text" name="num2"><br>
		<br>
		&emsp;&emsp;&emsp;&emsp;<button type="submit" name="ketqua">Submit</button>
	</form>
	<?php
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$pheptoan = $_POST['pheptoan'];	


		switch ($pheptoan) {
			case '+':
			$ketqua = $num1 + $num2;
			break;
		case '-':
			$ketqua = $num1 - $num2;
			break;
		case '/':
			$ketqua = $num1 / $num2;
			break;
		case '*':
			$ketqua = $num1 * $num2	;
			break;
		case '%':
			$ketqua = $num1 % $num2	;
			break;
		default:
			echo "ban nhap sai";
			break;
		}
		echo "<h1> Ket qua:$num1 $pheptoan $num2 = $ketqua</h1>";
		?>

</body>
</html>