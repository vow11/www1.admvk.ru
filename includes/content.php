<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'connect.php';

$cat = filter_input(INPUT_GET, 'category');
$function = filter_input(INPUT_GET, 'function');

echo '<div class="content">';
echo $function($cat);

//обработка ссылок меню
function show_vendors($id) {
    global $link;
    $query = mysql_query("SELECT * FROM vendors WHERE categories_name=$id", $link);
        while ($rows = mysql_fetch_array($query)){
            echo $rows['name'].'<br>';   
        }
}

echo '</div>';