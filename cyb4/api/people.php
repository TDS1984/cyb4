<?php

// симуляция, - добавили в БД людей. Обычно здесь программный код котороый извлекает данные из БД
$people = [
    array("firstName" => "Yuri","lastName" => "Andrienko","salary" => 123456 ),
    array("firstName" => "Vasya","lastName" => "Pupkin","salary" => 166666 ),
    array("firstName" => "Yulia","lastName" => "Yulina","salary" => 999999 ),
    array("firstName" => "Andrey","lastName" => "Andreev","salary" => 55555999 ),
    ];

    // далее фильтрация по букве.
    
    $letters = strtolower($_REQUEST["letters"]);// - где то тут ошибка
    
    $results = [];
    foreach($people as $person) {
        if (str_starts_with(strtolower($person["lastName"]), $letters)) {
             array_push($results, $person);

        }
    }

    echo(json_encode($results));

   