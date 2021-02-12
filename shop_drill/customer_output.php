<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>会員登録画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php require 'menu.php'; ?>
	<?php
	require 'db_connect.php';

	$purchase_id=1;
	foreach($pdo->query('select max(id) form purchese')as $row){
		$purchase_id=$row['max(id)']+1;
	}
	$sql="insert into purchase values(:id,:customer_id)";
	$stm=$pdo->prepare($sql);
	$stm->blndValue(":id",$purchase_id,PDO::PARAM_INT);
	if($stm->execute()){
		foreach($_SESSION['product'] as $purchase_id => $product){
			$sql="insert into purchase_detail values(:purchase_id,:count)";
			$stm
		}else{
			
				echo '購入手続き中にエラーが発生しました。申し訳ございません。'
			}
		}
	
	?>

</body>

</html>