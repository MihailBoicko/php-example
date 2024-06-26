<?php

//...............................................СТРОКОВЫЕ ОПЕПАЦИИ.............................

/*$str = 'Hello world';
echo "VAR : $str";

$length = strlen($str);
echo trim('   some  ');//вывод без пробелов в начале и конце слова
$upper = strtoupper(' some');//слово верхний регистр
$lower = strtolower('soMe');//слово в нижний регистр
echo strtoupper(trim( ' some   '));//обьединение ф-ций
echo md5('qwerty');//Хеширование текста*/

//...............................................УСЛОВНЫЕ ОПЕРАТОРЫ.......................................

/*$a = 5;
if($a == 5){//условия ==, !=, >, <, <=, >=
    echo "YES";
}

$str = 'Hello';
if($str == 'Hello'){//условия ==, != для STRING
    echo "YES";
} else {
    echo 'NO';
}

$a = 4;
$str1 = 'HEllo';

if($str1 = 'Hello'){
    echo 'yes';
}elseif ($a == 4){//использование ifelse
    echo 'yes';
}else{
    echo 'no';
}

$a = 5;
$str2 = 'hello';
$isWeatherGood = false;

if(str2 != 'HEllo' || !$isWeatherGood){//!isWeatherGood == isWeatherGood = false// || - ИЛИ, && - И
    echo "FIRST";
}elseif($a == 5){
    $res = 'SECOND';
    echo $res;
}else{
    echo 'no';
}*/
//.....................................ОПЕРАТОР....SWITCH CASE............................................
/*
$x = 6;

switch ($x){
    case 5:
        echo "Var: 5";
        break;
    case 6:
        echo "Var: 6";
        break;
    case 7:
        echo "Var: 7";
        break;
    default:
        echo 'NO RESULT';
        break;
}*/
//.............................................МАССИВЫ..............................................

//$nums = array(12,3,4,5,5,6,4);//массив
//$num1 = [12,3,4,5,5,6,4];//одинаковый массив по разному обьявлен
//$nums[1] = 10;//в скобках указываем индекс и переопределяем
//echo $num[1];
//
//$mix = [12, false, "open", 0.345];//один массив может вмещать в себя все типы данных
//$mix[1] = "false";
//echo $mix[1];
//
//$list = ["age"=> 24, "name" =>"MICH", "hobby" => "music"];//асоциативные массив
//$list2 = [2.5 => 24, true =>"MICH", "hobby" => "music"];//определителем может быть любого типа
//$list["name"] = "MIKHAIL";
//echo $list["name"];
////Многомерные массивы
//$matrix = [
//    [1,2,3,4.45],
//    [1,3,true],
//    [2,4,5,6,"6"]
//];
//
//echo $matrix[1][2] = false;
//echo $matrix[1][2];
//..................................ЦИКЛЫ.................................................

//ЦИКЛ FOR

//for($i = 0; $i< 10;$i++){//в цикле for все условия прописываются в скобках
//    echo $i. '<br>';
//}

//ЦИКЛ WHILE

//$i = 0;//Перед циклом создаем переменную
//while($i < 10){//в скобках указываем только условие
//    echo $i. '<br>';
//    $i++;
//}

//ЦИКЛ  DO WHILE
/*
$i = 0; //обьявляем перед циклом
do{//цикл делает как минимум одно действие
    echo $i;
}while($i<0);//после действия проверяет условие,если подходит продолжает цикл*/

//ОПЕРАТОРЫ В ЦИКЛАХ

/*for($el = 100; $el > 10; $el /=2){
    if($el < 15){
        break;//останавливает цикл при допущении условия
    }
    if($el % 2 == 0){
        continue;//оператор не выходит из цикла и пропускает следующее действие и опять прокручивает цикл
    }
    echo $el. '<br>';
}*/

//МАССИВЫ И ЦИКЛЫ

//$list = [5,6,7,8,false,4.5, 'element'];
//
//for ($i=0; $i<count($list); $i++){//count() считает колво элементов массива
//    echo "Element $i: $list[$i]". '<br>';
//
//}

//$list = ["age" => 24, "name" => "Mich", "hobby" => "Volleyball"];
//
//foreach ($list as $item => $value){
//    echo "Key : $item. Value: $value. <br>";
//}

/*$arr = [1,2,3,4,4,5,6];

foreach ($arr as $item) {//вывод значений
    echo "value: $item". '<br>';
}*/

/*$arr = [1,2,3,4,4,5,6];

foreach ($arr as $i => $item) {//вывод значений c индексами
    echo "Index:$i value: $item". '<br>';
}*/
//..........................................Ф-ЦИИ, ОБЛАСТЬ ВИДИМОСТИ............................

//function info($word){//обьявление ф-ции
//    echo "$word. <br>";
//}
//info(4);//вызов ф-ции

//function math($x, $y){
//    $res = $x + $y;
//    info($res);
//}
//math(4,5);
//............
//function math($x, $y){
//    return $x + $y;
//    /*$res = $x + $y;
//    return $res;//возвращаем результат*/
//}
//$res = math(4,5);

//function summary($arr) {//сумма всех эл массива
//    $summa = 0;
//    foreach ($arr as $value){
//        $summa += $value;
//    }return $summa;
//
//}
//$list = [1,2,3,4,5,6];
//echo summary($list). '<br>';
//echo summary([1,2,3,4,5,6]);
//.......Область видимости.........
/*function info(){
    global $x;//кл слово для области видимости, иначе в ф-ции ее не видно
    $x = 0;
}
$x = 10;
info();
echo $x;*/

/*function click(){
    static $count;//статическая переменная,сохраняет значение после каждого вызова ф-ций
    $count++;
    echo $count;
}

click();
click();
click();*/
