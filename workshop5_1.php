<html>
<head>
	<meta charset="utf-8">
</head>
<?php
	$pdo = new PDO("mysql:host=localhost;dbname=blueshop; charset=utf8", "root", "");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $pdo->prepare("SELECT * FROM member WHERE name =?");
	$stmt->bindParam(1, $_GET["name"]);
	$stmt->execute();
	$row = $stmt->fetch() ; 
?>	
    
    username : <?=$row["username"]?><br>
	password : <?=$row["password"]?><br>
	ชื่อสมาชิก: <?=$row["name"]?><br>
	ที่อยู่: <?=$row["address"]?><br>
	เบอร์โทร: <?=$row["mobile"]?><br>
	อีเมลล์: <?=$row["email"]?><br>
	<img src='member_photo/<?=$row["password"]?>.jpg' width='200'><hr>
</body>
</html>