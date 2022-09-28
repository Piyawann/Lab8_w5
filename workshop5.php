<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
	$pdo = new PDO("mysql:host=localhost;dbname=blueshop; charset=utf8", "root", "");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $pdo->prepare("SELECT * FROM member");
	$stmt->execute();
?>
<?php 
	while ($row = $stmt->fetch()) : ?>
		ชื่อสมาชิก: <?=$row["name"]?><br>
		ที่อยู่: <?=$row["address"]?><br>
		อีเมลล์: <?=$row["email"]?><br>
		<a href="workshop5_1.php?name=<?=$row["name"]?>">
			<img src='member_photo/<?=$row["username"]?>.jpg' width='100'><br>
		</a><br>
	<?php endwhile; ?>
</body>
</html>