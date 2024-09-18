
<?php
function basicMathOperations($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num1 / $num2;
        default:
            throw new Exception("Неверный оператор.");
    }
}
echo "Задание 1. ";
echo "<br>";
echo basicMathOperations(2, 3, "+");
echo "<br>";

function mathOperation($arg1, $arg2, $operation) {
    if ($operation === "+") {
        return $arg1 + $arg2;
    } elseif ($operation === "-") {
        return $arg1 - $arg2;
    } elseif ($operation === "*") {
        return $arg1 * $arg2;
    } elseif ($operation === "/") {
        return $arg1 / $arg2;
    } else {
        throw new Exception("Неверная операция.");
    }
}
echo "Задание 2. ";
echo "<br>";
echo mathOperation(3, 3, "*");
echo "<br>";

echo "Задание 3. ";
echo "<br>";

$regions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов']
];

foreach ($regions as $region => $cities) {
    echo "-" ,"$region:\n";
    echo "<br>";
    foreach ($cities as $city) {
        echo "--","\t$city\n";
        echo "<br>";
    }
}

echo "Задание 4. ";
echo "<br>";
$transliterationMap = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
    'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
    'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
    'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
    'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch',
    'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => '',
    'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
];

function transliterate($string, $transliterationMap) {
   
    return strtr($string, $transliterationMap);
}
echo transliterate('москва', $transliterationMap);
echo "<br>";
echo "Задание 5. ";
echo "<br>";
function power($base, $exp) {
    if ($exp == 0) {
        return 1;
    } elseif ($exp % 2 == 0) {
        return power($base, $exp / 2) * power($base, $exp / 2);
    } else {
        return $base * power($base, $exp - 1);
    }
}
echo power(2, 3);

echo "<br>";
echo "Задание 6. ";
echo "<br>";
function getFormattedTime() {
 
    $time = date('H:i');
    
   
    if (substr($time, 0, 1) == '0') {
        $time = substr($time, 1);
    }
    
    if ($time == '12') {
        return "12 часов 00 минут";
    } elseif ($time > '12') {
        return "$time часов $time минут";
    } else {
        return "$time часов 00 минут";
    }
}
echo getFormattedTime();
