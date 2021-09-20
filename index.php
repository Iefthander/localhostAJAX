<!DOCTYPE html>
<!-- Язык текста -->
<html lang="en">
<head>
	<!-- Вставил, чтобы пофиксить баг с ошибкой "favicon.ico:1" -->
	<link rel="shortcut icon" href="#">
	<!-- Кодировка файла -->
	<meta charset="UTF-8">
	<!-- Кодировка, разметка страницы -->
	<meta name="viewport" 
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Мета-заголовок -->
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Подключаем jquery 3.6.0 через сайт -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!-- Название страницы -->
	<title>Document</title>
</head>
<body>
<!-- Кнопка выбора категории -->
<label for="country">Выберите категорию</label>
<!-- Тег кнопки выбора категории -->
<select name="country">
<!-- Опция выбора категории -->
<option value="0" selected="selected">Выберите категорию</option>
	<option value="1">Всё</option>
	<option value="2">Клавиатура</option>
	<option value="3">Монитор</option>
	<option value="4">Мышь</option>
	<option value="5">Колонки</option>
</select>
<!-- Кнопка выбора товара -->
<label for="city">Выберите товар</label>
<!-- Тег кнопки выбора товара -->
<select name="city">
<!-- Опция выбора товара с максимальным количеством пунктов, которые можно использовать -->
	<option value="0"></option>
	<option value="1"></option>
	<option value="2"></option>
	<option value="3"></option>
	<option value="4"></option>
	<option value="5"></option>
	<option value="6"></option>
	<option value="7"></option>
	<option value="8"></option>
</select>
<!-- Подключаем js файл в сайт -->
<script src="main.js"></script>
</body>
</html>