<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">  
	<title>Гостевая книга</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<div id="wrapper">
		<h1>Гостевая книга</h1>

		<? include $content; ?>
		
		<? echo Message::display(); ?>

		<? include 'views/partials/form.php'; ?>
	</div>
</body>
</html>

