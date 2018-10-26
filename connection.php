<?php

function dbconnect($usertype){
$host = 'localhost';
$db = 'vokuraru_comments';
switch ($usertype) {
    case 'read':
        $user = 'vokuraru_read';
        $pwd = 'qJ2ul9CuCI';
        break;
    case 'write':
        $user = 'vokuraru_write';
        $pwd = 'UJMEypGRUP';
        break;
    case 'admin':
       $user = 'vokuraru_vozhak';
       $pwd = 'l37ag3Z115zuxXfu';
        break;
     default:
        exit('Тип пользователя неопознан.');   
}
$dbm = new mysqli($host, $user, $pwd, $db) or die('Не могу открыть базу данных');
return $dbm;
}

