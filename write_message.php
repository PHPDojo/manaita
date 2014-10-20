<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html";charset="UTF-8" />
		<title>まな板</title>
	</head>
	<body>
		<h1>まな板(ver.0.1)</h1>
		■メッセージの入力をどうぞ。<br />
			<form action="write_message.php" method="post">
				name：<br />
				<input type="text" name="names" size="20" />
				<br />
				title：<br />
				<input type="text" name="title" size="30" />
				<br />
				message：<br />
				<textarea name="messages" cols="40" row="5" ></textarea>
				<br />
				<input type="submit" value="メッセージの登録" />
			</form>
			<hr />
<?php
	$name=$_POST['names'];
	print($name."さん<br />");
	$title=$_POST['title'];
	print("<b>".$title."</b><br />");
	$message=$_POST['messages'];
	
	$filename = 'manaita.txt';
	$fp = fopen($filename,"a+");
	fputs($fp,$_POST["names"]."\n");
	print("\r\n");
	fputs($fp,$_POST["title"]."\n");
	print("\r\n");
	fputs($fp,$_POST["messages"]."\n");
	print("\r\n");
	print($message);
	print("\r\n");
	fclose($fp);
?>
	</body>
</html>