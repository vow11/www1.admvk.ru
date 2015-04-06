<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//данные для подкючения (заменить на свои)

$db_user = '';
$db_passwd = '';
$db_name = '';

// здесь подключаемся к базе данных

// $link - ссылка на подключение

$link = mysql_connect('localhost', $db_user, $db_passwd);

mysql_select_db($db_name, $link);