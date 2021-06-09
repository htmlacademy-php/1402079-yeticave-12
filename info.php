<?php
$is_auth = rand(0, 1);

$user_name = 'Никита'; // укажите здесь ваше имя

function formatSum ($number) {
    $ceiledNumber = ceil($number);
    if ($ceiledNumber < 1000) {
        return $ceiledNumber;
    }
    return number_format($ceiledNumber, 0, ' ', ' ');
}



$categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

$lot_list = [ [
    'name' => '2014 Rossignol District Snowboard',
    'category'=> 'Доски и лыжи',
    'price' => 10999,
    'img' => 'img/lot-1.jpg',
    'end_lot' => '2021-04-25 15:25'
] ,
    [
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 159999,
        'img' => 'img/lot-2.jpg',
        'end_lot' => '2021-08-27 18:15'
    ] ,
    [
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' => 8000,
        'img' => 'img/lot-3.jpg',
        'end_lot' => '2021-09-30 22:01'
    ] ,
    [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => 10999,
        'img' => 'img/lot-4.jpg',
        'end_lot' => '2021-10-10 10:00'
    ] ,
    [
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' => 7500,
        'img' => 'img/lot-5.jpg',
        'end_lot' => '2021-06-20 05:13'
    ] ,
    [
        'name' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => 5400,
        'img' => 'img/lot-6.jpg',
        'end_lot' => '2021-05-01 02:30'
    ]
] ;
?>
