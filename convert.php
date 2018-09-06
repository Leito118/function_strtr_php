<?php
//Функция преобразования. Пример: input = 10, output = десять/ten
function conver($text){
	$text = strtr($text, array(
		'1' => 'Один',
		'2' => 'Два',
		'Test' => 'Test 200 OK'
	));
	return $text;
}

//Принимает POST/GET параметры из HTML-формы, обрабатыем их и выводи готовый результат

if(isset($_GET['go'])) {
	$text = $_POST['text'];
	echo conver($text);
}

//HTML-форма для ввода данных и передачи их в обработчик

echo "<html>
<head>
<title>Функция преобразования</title>
</head>
<body>
<form action='?go=1' method='POST'>
<input type='text' name='text' placeholder='Enter your text'><br />
<input type='submit' name='submit' value='Go'>
</form>
</body>
</html>";



$a = [
'test'=>'200',
'2' => 'two',
'200' => 'GET OK',
'OK' => 'fix',
'response' => [
	'login' => 'Rick',
	'access' => 'All'
],
];

echo "<pre>";
var_dump($a['response']);
echo "</pre>";

echo "<pre>";
var_dump($a);
echo "</pre>";

?>