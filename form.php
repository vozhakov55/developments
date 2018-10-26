<?php
// $errors = [];
$missing = [];
$expected = ['name', 'email', 'comment' ];
$required = ['name', 'comment'];
if(isset($_POST['send']))
{
	foreach ($_POST as $key => $value)
	{
	$temp = trim($value);               // стр. 165
		if (empty($temp) && in_array($key, $required))
		{
		$missing[] = $key;
		}
		if (in_array($key, $expected))
		{
		${$key} = $temp;
		}
	}
}







