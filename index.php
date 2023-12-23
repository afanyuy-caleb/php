<?php
	include_once('info_search.php');
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>search Trial</title>
</head>
<body>
	
<h2> Hi there and welcome to us trying to create a functional search bar in php</h2>
	<form action="" method="POST">
		<input type="text" name="search" placeholder="search electronic">
	</form>

	<?php
		if(isset($error)){
			echo $error;
		}else
			foreach($result as $product):
		
	?>
	<p><?= $product['pd_name']; ?></p>

	<?php endforeach?>
</body>
</html>