<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html";charset="UTF-8" />
		<title>DB_Connect</title>
	</head>
	<body>
		<?php
			$conn= mysql_connect("localhost","root","");
			mysql_select_db("kitchen",$conn);
			$res=mysql_query("show tables",$conn);
			if($res){
				print("データがとってこれました。");
			}
			mysql_free_result($res);
		?>
	</body>
</html>