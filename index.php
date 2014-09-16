<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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
			ここに入力されたやつが表示される予定。
	</body>
</html>