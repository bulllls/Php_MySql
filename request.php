<?php
$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
// $facebook_url = $_REQUEST['facebook_url'];
//Функция strpos() (ее имя означает string position — позиция строки)
//возвращает число, сообщающее о том, где в строке, в которой ведется поиск,
//находится искомая строка.
$facebook_url = str_replace("facebook.org", "facebook.com",
trim($_REQUEST['facebook_url']));
$position = strpos($facebook_url, "facebook.com");
if ($position === false) {
$facebook_url = "http://www.facebook.com/" . $facebook_url;
}

$twitter_handle = trim($_REQUEST['twitter_handle']);
$twitter_url = "http://www.twitter.com/";
$position = strpos($twitter_handle, "@");
if ($position === false) {
	$twitter_url = $twitter_url.$twitter_handle;
} else {
	//действия удаления @ из Twitter
	$twitter_url = $twitter_url.substr($twitter_handle.$position + 1);
}
?>
<!-- Функция trim() (впрочем, как и функции rtrim() и ltrim()) удаляет только те пробелы, которые находятся за пределами текста. Поэтому функция trim() хорошо подходит для работы с такими строками,
как « Ого, как много пробелов. », но не поможет при удалении лишних пробелов в таких строках,
как «Ого, как много пробелов.» -->

<!-- Во многих случаях все, что можно сделать по отдельности, PHP позволяет сделать
за один шаг. Рассмотрим следующий фрагмент PHP-сценария:
$facebook_url =
str_replace(
"facebook.org",
"facebook.com",
trim($_REQUEST['facebook_url']));
В этом коде объединены несколько разных действий. Его можно переписать
следующим образом, чтобы сделать отдельные действия немного понятнее:
$facebook_url = $_REQUEST['facebook_url'];
$facebook_url = trim($facebook_url);
$facebook_url =
str_replace(
"facebook.org", "facebook.com",
$facebook_url); -->
<html>
	<head>
		<meta charset="utf-8">
		<link href="../../css/phpMM.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
			<div id="example">Пример 3.1</div>
			<div id="content">
			<p>Это структура с данными, получаемыми из формы:</p>
			<p>
			  Имя: <?php echo $first_name. " ".$last_name ?><br>
			  <!-- Фамилия: <?php echo $last_name; ?><br> -->
			  Адрес электронной почты: <?php echo $email; ?><br>
			  <!-- URL-адрес в Facebook: <?php echo $facebook_url; ?><br> -->
			  <a href="<?php echo $facebook_url; ?>">Ваша страница на Facebook:</a><br>
			  <a href="<?php echo $twitter_url; ?>">Проверьте свой Twitter-канал</a><br>
			</p>
		</div>
		<div id="footer"></div>
	</body>
</html>
