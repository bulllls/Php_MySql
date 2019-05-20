<?php
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
// $facebook_url = $_REQUEST['facebook_url'];
//Функция strpos() (ее имя означает string position — позиция строки)
//возвращает число, сообщающее о том, где в строке, в которой ведется поиск,
//находится искомая строка.
$position = strpos($facebook_url, "facebook.com");
if ($position === false) {
$facebook_url = "http://www.facebook.com/" . $facebook_url;
}

$twitter_handle = $_REQUEST['twitter_handle'];
$twitter_url = "http://www.twitter.com/";
$position = strpos($twitter_handle, "@");
if ($position === false) {
	$twitter_url = $twitter_url.$twitter_handle;
} else {
	//действия удаления @ из Twitter
	$twitter_url = $twitter_url.substr($twitter_handle.$position + 1);
}
?>


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
