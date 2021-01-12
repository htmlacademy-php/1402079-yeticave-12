<?php
require_once ('helpers.php');
require_once ('info.php');


$page_content = include_template('main.php', [
'categories' => $categories,
'lot_list' => $lot_list
]);

$layout_content = include_template('layout.php', [
'is_auth' => $is_auth,
'user_name' => $user_name,
'content' => $page_content,
'categories' => $categories,
'title' => 'Главная страница'
]);

print $layout_content;

