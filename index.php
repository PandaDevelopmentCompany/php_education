<?php


print_r($paper);
echo "<br>";
// Вывод массива происходит ниже по строкам, чем инициализация массива. В данном случае ничего выведено не будет, т.к. сам массив находится ниже.

// массивы

// Ввозможности. Общие положения: 




// Добавление элементов в массив
// Массивы с числовой индексацией

// Добавление элементов в массив
$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Photo";
$paper[] = "Laser";
// php сам расставит нумерацию
print_r($paper);
echo "<br>";
// Можно принудительно задать нумерацию, но тогда возникают проблемы с большим количеством элементов, когда возникнет необходимость удаления, нумерацию придется тоже корректировать и тд

$paper_1[0] = "Copier";
$paper_1[1] = "Inkjet";
$paper_1[3] = "Photo";
$paper_1[2] = "Laser";

print_r($paper);
echo "<br>";
echo $paper[1];
// извлечение данных из массива.
echo "<br>";

$paper_2[] = "Copier";
$paper_2[] = "Inkjet";
$paper_2[] = "Photo";
$paper_2[] = "Laser";


// извлечение данных из массива paper_2
for($j=0; $j<4; ++$j) {
  echo "$j: $paper_2[$j]<br>";
}

echo "<br>";


// Ассоциативные массивы
// Использование ассоциативных массивов позволяет ссылаться на элементы не по номерам, а по именам.
$paper_3['some_name_paper0'] = "Copier0";
$paper_3['some_name_paper1'] = "Copier1";
$paper_3['some_name_paper2'] = "Copier2";
$paper_3['some_name_paper3'] = "Copier3";
$paper_3['some_name_paper4'] = "Copier4";

echo $paper_3['some_name_paper3'] . "<br>";
// Имена в квадратных скобках - это индексы или ключи, а значения - это значения.

echo "<br>";

// Добавление элементов с помощью ключевого слова array в числовом массиве
$p1 = array("paper_1", "paper_2", "paper_3");
// Не имеет значения, какие кавычки используются в данном виде добавления элементов к массиву
echo "Элемент в массиве p1 под №3: " . $p1[2] . "<br>";

// Добавление элементов с помощью ключевого слова array в ассоциотивном массиве
$p2 = array('paper_index_1' => "Вид бумаги номер 1", 
            'paper_index_2' => "Вид бумаги номер 2",
            'paper_index_3' => "Вид бумаги номер 3",
            'paper_index_4' => "Вид бумаги номер 4");
echo "Элемент в ассоциативном массиве p2 под номером 4: " . $p2['paper_index_4'] . "<br>";

echo "<br>";


// Цикл foreach ... as
// Перебрать поочередно все элементы массива, чтобы произвести с ними какие-либо действия

$paper_check_foreach = array("paper_1", "paper_2", "paper_3", "paper_4");
$j_paper = 0;

foreach ($paper_check_foreach as $temp_paper) {
  echo "$j_paper: $temp_paper <br>";
  ++$j_paper;
}
echo "<br>";
// В данном примере при каждой итерации цикла каждый элемент по очереди проходит через переменную, которая стоит после ключевого слова as
// Данный пример показывает как цикл foreach..as используется в массивах с числовой индексацией


// Использование цикла foreach в ассоциативных массивах требует указания формата ключ => значение.
$paper_associate_array_check = array('paper_associate_1' => "paper_11",
                                     'paper_associate_2' => "paper_12",
                                     'paper_associate_3' => "paper_13",
                                     'paper_associate_4' => "paper_14");
foreach ($paper_associate_array_check as $index_array => $associate_description) {
  echo "$index_array: $associate_description <br>";
}
echo "<br>";

// Альтернативный синтаксис foreach..as - функция list в сочетании с функцией each для асоциативных массивов
$paper_associative = array('paper_index_5' => "paper_15",
                           'paper_index_6' => "paper_16",
                           'paper_index_7' => "paper_17",
                           'paper_index_8' => "paper_18");
while (list($temp_variable_for_index, $temp_variable_for_meaning) = each($paper_associative)) {
  echo "$temp_variable_for_index: $temp_variable_for_meaning <br>";
}
// Когда возвращать становится нечего, функция each возвращает false
// Функция list принимает массив в качестве аргументов и раскидывает его по переменным, находящимся в скобках.

list($variable_1_7, $variable_1_8) = array('Alice', 'Bob');
echo "<br>";
echo "$variable_1_7 - Alice, Bob - $variable_1_8" . "<br>";
// Использование функции list в массиве с числовой индексацией.

// Вопрос: а как функция list распознает, какой из массивов с числовой индексацией, а какой массив является ассоциативным?
// Возможно для этого и нужна функция each




echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
// Многомерные массивы
// Можно создавать массивы любой размерности, но обычно не используется больше трех.


$products = array(
  'paper' =>  array(
    'copier' =>  "paper_for_copier",
    'inkjet' =>  "paper_for_inkjet_printer",
    'photo'  =>  "paper_for_photo_print",
    'laser'  =>  "paper_for_laser_printer"),
  'pens'  =>  array(
    'ball'  =>  "pens_width_ball",
    'hilite'  =>  "pens_hilite",
    'marker'  =>  "markers"),
  'misc'  =>  array(
    'tape'  =>  "sticky_tape",
    'glue'  =>  "glue_glue",
    'clips' =>  "clips_clips"
  )
);
echo "<pre>";
foreach ($products as $section_products => $items_products) {
  foreach ($items_products as $key_products => $item_single_product) {
    echo "$section_products: \t$key_products \t($item_single_product)" . "<br>";
  }
}
echo "</pre>";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



















// Конструкторы нужны для того, чтобы изнутри класса инициализировать какие-либо свойство своего же класса, т.е присваивать какие-либо значения свойствам своего же класса.


// При инициализации производного класса, родительский конструктор в подклассе сам не вызывается. Вызвать его можено с помощью с помощью parent::


// цель - проверить, наследует ли производный класс метод от родительского
//Вывод: подкласс или дочерний класс или производный класс наследует также и методы от родителя с такими же инструкциями.


$object_son_2024 = new check_extends_son;
$object_son_2024 -> variable_1_3 = 13;
$object_son_2024 -> variable_1_4 = 14;
$object_son_2024 -> variable_1_5 = 15;
$object_son_2024 -> variable_1_6 = 16;
$object_son_2024 -> check_extends_son_method();
$object_son_2024 -> check_extends_method();

class check_extends {
  public $variable_1_3, $variable_1_4;
  function check_extends_method() {
    echo "Какой-либо код" . "<br>";
  }
}

class check_extends_son extends check_extends {
  public $variable_1_5, $variable_1_6;

  function check_extends_son_method_0() {
    echo "Здесь вызывается еще один метод в производном классе. Причем вызовет его второй метод в этом же клссе <br>";
  }

   function check_extends_son_method() {
    echo $this->variable_1_3 . "<br>";
    echo $this->variable_1_4 . "<br>";
    echo $this->variable_1_5 . "<br>";
    echo $this->variable_1_6 . "<br>";
    self::check_extends_son_method_0();
    parent:: check_extends_method();
  }
}



// Области видимости свойств и методов.
// public - доступ из всего внешнего кода. 
// protected - доступ только из экземпляров и подклассов
// private - доступ только из текущего класса.



// Примечания! 
// К константам в классах из методов можно обращаться через ключевое слово self и оператор разрешения области видимости ::
// Также через self:: можно получить доступ к статическому свойству. из метода
// А также вызвать другой метод подкласса из метода этого же подкласса.


// С помощью ключевого слова parent:: и оператора разрешения области видимости можно вызвать метод суперкласса из метода производного класса. Это бывает нужно, потому что подклассы переписывают методы, которые они унаследовали от родителя.
// Также можно запретить подклассу переписывать методы родителя. Это делается с помощью ключевого слова final. Ставится перед function.


// Для получения доступа к свойствам текущего класса через метод, необходимо использовать $this ->


// Свойства в классах могу быть инициализированы только точными значениям, но не резулььтатом вычисления какого-либо выражения. 


// Статические методы не имею доступа к свойствам класса и тем более к свойствам его экземпляров.
// Статический метод можно вызвать напрямую, т.е. без создания объекта и последующего обращения к методу
// Вызывается статический метод через оператор разрешения области видимости.


// Статические свойства могут быть вызваны напряму через оператор разрешения области видимости.
// А также к ним можно получить доступ даже из открытого метода через self::





$temp_object = new temp_class_31_01;
$temp_object -> variable_1_1 = Alexander;
$temp_object -> variable_1_2 = Andronov;
$temp_object -> function_31_01();
echo "<br>";
print_r($temp_object);


class temp_class_31_01 {
  public $variable_1_1, $variable_1_2;

  function function_31_01(){
    echo "Здесь располагается код для исполнения";
  }
}

// Примчания!
// Свойства в классах можно обозначать через запятую от обозначения зоны видимости.
// 











$check_access_static_method_object = new check_access_static_method;

$check_access_static_method_object -> variable_for_static_method = "qwerty";

class check_access_static_method {
  public $variable_for_static_method;
  function get_name() {
    return $this -> variable_for_static_method;
  }
}

echo $check_access_static_method_object -> get_name();




echo "<br><br><br><br><br><br>";


echo phpversion();

echo "<br>";

require "temp_project.php";

// echo phpinfo();
echo "<br>";



$ten = 10;
while ($ten > -10) {
  $ten--;
  if ($ten == 0) continue;
  echo (10 / $ten) . "<br>";
}


echo "<br>";



for ($count_count = 1; $count_count < 12; ++$count_count) {
  echo "Число $count_count, умноженное на 12, равно " . $count_count * 12 . "<br>";
}
echo "<br>";




$t = 2;
echo !$t;
echo "<br>";


// Проверить, при клонировании объекта, откуда новый объект берет данные, от класса или объекта родительского?
// вывод: когда клонируется объект, то новый объект берет данные по дефолту из своего донорского объекта.
$object_son = new son_class;
$object_son -> variable_1 = 11;
$object_son -> variable_2 = 22;

$object_son_2 = clone $object_son;
$object_son_2 -> variable_1 = 111;
$object_son_2 -> variable_2 = 222;
echo $object_son -> variable_1 . "<br>" . $object_son -> variable_2 . "<br><br>";
echo $object_son_2 -> variable_1 . "<br>" . $object_son_2 -> variable_2 . "<br><br>";


class son_class {
  public $variable_1, $variable_2;
  function son_function() {
    echo "метод исходного класса";
  }
}



echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$object_check = new Check_static_method;
echo $object_check -> check_static;
echo "<br>";
echo $object_check -> method_which_check();
// целиков объект вывести через эхо нельзя, только если обращаться к каким-либо свойствам или методам
class Check_static_method {
  const CHECK_1 = 1;
  public $check_static = 1,
  $check_static_2 = 2;

    function method_which_check(){
    return $this -> check_static_2;
    // обратиться к свойства класса метод может только через переменную this
  }
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



Table::get_materials_table();
// таким способом можно вызывать только статические методы

class Table {
  const WOOD = 1;
  const PLASTIC = "Предоставление доступа к константе из интерфейса класса";
  const STEEL = 3;
  public $temp_materials_1;

  static function get_materials_table() {
    echo self::PLASTIC;
    // таким образом мы имеем возможность предоставлять доступ к константе из интерфейса класса через оператор разрешения области видимости
  }
}
// статические методы не имеют доступа к объектам. Они создаются только для класса.




echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



$object_Paper = new Paper;
$object_Paper -> lenght = 44;
echo $object_Paper -> get_properties();


class Paper {
  public $materials, $lenght;

  function get_properties() {
    return $this -> lenght;
  }
}






echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



$username = "Alex Xela";
echo $username;
echo "<br>";

$current_username = $username;

echo $current_username;

echo "<br>";

$count = 20 / 5;

echo $count;


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$team = array('alex1', 'Alex', 'Xela');

echo $team[0];

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$names_men_women_common = array(
  array('Alexander', 'Andrey', 'Oleg'),
  array('Alina','Elena', 'Lucy'),
  array('Asya','Asya2', 'Asya3'));

  echo $names_men_women_common[1][2] . " " . $names_men_women_common[2][2];


echo "<br>";
echo "<br>";
echo "<br>";

  $names_main_array = array(
    array('Alexandr1', 'Alexandr2', 'Alexandr3'),
    array('Alex1', 'Alex2', 'Alex3'),
    array('Asya1', 'Asya2', 'Asya3')
  );

echo $names_main_array[0][2];


echo "<hr>";

$main_array = array(
array(array('qwerty1_1', 'qwerty1_2', 'qwerty1_3')),
array('qwerty2_1', 'qwerty2_2', 'qwerty2_3'),
array('qwerty3_1', 'qwerty3_2', 'qwerty3_3'));

echo $main_array[0][0][1][1];


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$count += 10; //оператор присваивания

echo $count;


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$message = 15;
echo "У вас " . $message . " Сообщений";

echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";

$trees = array(array('Сосна ','Береза','Ель'),
array('Дуб','Елка ','Осина'),
array('Ореховое дерево','Ольха','Нива')
);

echo $trees[0][0].$trees[1][1].$trees[2][2];

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$name_tree = "Я назову это дерево ";

$name_tree .= $trees[0][0];

echo $name_tree;



echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<hr>";
echo "<hr>";


// в php если необходимо передать точное значение строки, то нужно воспользоваться одинарными кавычками.
// если же требуется в значение строки ввести значение какой-либо переменной, то в таком случае необходимо воспользоваться двойными кавычками.


// также, если необходимо указать апостроф или кавычки в каком либо слове, то пере символом необходимо поставить обратный слеш, чтобы php воспринимал этот символ бкувально


$example_width_count = 104939*23854793;
echo substr($example_width_count, 3,2);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

function longdate($timestamp)
    {
return date("l F jS Y", $timestamp); }


 echo longdate(time());
 echo "<br>";
 echo __LINE__;


echo "<hr>";
echo "<hr>";
echo "<hr>";

$a = 5;
$b = 5;

if ($a > $b) echo "$a больше $b<br>";
if ($b > $a) echo "$b больше $a<br>";
if ($a >= $b) echo "$a больше либо равно $b<br>";
if ($a <= $b) echo "$a меньше либо равно $b<br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




$a = 0; $b = 0;

echo ($a and $b) . "<br>";
echo ($a or $b) . "<br>";
echo ($a xor $b) . "<br>";
echo !$a . "<br>";


echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";


for ($count=0; $count<=12; ++$count)
{
  echo "Число $count, умноженное на 12 равно " . $count * 12 . "<br>";
}

echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";



for ($i=1, $j=1; $i+$j<10; $i++, $j++)
{
  echo 10;
}


echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";




$fp = fopen("text.txt", 'wb');

for ($j = 0; $j <100; ++$j)
{
  // $written = fwrite($fp, "Александр ");
  // if($written == FALSE) break;
  if (!fwrite($fp, "Александр ")) break;
}
fclose($fp);



$filehtml = fopen("index.html", "wb");
for ($count = 0; $count < 3; ++$count)
{
if (!fwrite($filehtml, "<div>alex alex </div> ")) echo "error";
}
fclose($filehtml);

echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";


$j = 11;

while ($j > -10)
{
  $j--;
  if ($j == 0) continue;
  echo (10 / $j) . "<br>";
}

echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";



$a = 52;
$b = 12;
$c = (int) ($a / $b);
echo $c;
// преобраазование дробного числа в целое число



echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";

// Задача: откорректировать имена. Перавая буква должна быть заглавной
echo fix_names("alEX", "igoREvich", "AndRONov");

function fix_names($n1, $n2, $n3)
{
  $n1 = ucfirst(strtolower($n1));
  $n2 = ucfirst(strtolower($n2));
  $n3 = ucfirst(strtolower($n3));
  return $n1 . " " . $n2 . " " . $n3;
}


echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";

// Задача: преобразовать имена в корректную форму и вернуть ответ массивом.

$names_1 = fix_names_1("alexandeR", "igorevicH", "andronoV" /*параметры, и их тип данных, над которыми будет производиться работа*/);

function fix_names_1($n1, $n2, $n3 /*параметры, и их тип данных, над которцми будет производиться работа*/)
{
  $n1 = ucfirst(strtolower($n1));
  $n2 = ucfirst(strtolower($n2));
  $n3 = ucfirst(strtolower($n3));
  return array($n1, $n2, $n3); /*После принятия и обработки аргументов функцией, результат вычисления будет передан в таком виде*/

}

echo "HERE" . "<br>";

echo $names_1[0] . " " . $names_1[1] . " " . $names_1[2];


echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";

$a24 = "alEx";
$a25 = "xeLaa";
$a26 = "tor";

$a34 = "alExxxx";
$a35 = "xeLaaxxx";
$a36 = "torxxx";

fix_names_2($a24, $a25, $a26);
fix_names_3($a34, $a35, $a36);

$a1 = "alexanDER";
$a2 = "igorEVICh";
$a3 = "AndrONOV";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fix_names_2($a1, $a2, $a3);
echo $a1 . " " . $a2 . " " . $a3;
echo "<br>";
echo $a24 . " " . $a25 . " " . $a26;

echo "<br>";
echo $a34 . " " . $a35 . " " . $a36;

function fix_names_2(&$n1, &$n2, &$n3)
{
  $n1 = ucfirst(strtolower($n1));
  $n2 = ucfirst(strtolower($n2));
  $n3 = ucfirst(strtolower($n3));
}

echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";

$variable = phpversion();

echo "Используемая версия языка php на данный момент $variable" . "<br>";

echo "Используемая версия языка php на данный момент " . phpversion();


echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<hr>";

echo "функция print является псведофункцией и поэтому круглые скобки можно опустить!

функции - это набот инструкций, который выполняет конкретную задачу и в дополнение может вернуть какое-либо значение.
Можно извлечь фрагмент кода, который используется более одного раза, поместить его в функцию и вызвать функцию по имени в тот
момент, когда это будет необходимо.
Каждая функция компилируется один раз независимо от частоты ее вызовов.";



$text_about_function = "функция print является псведофункцией и поэтому круглые скобки можно опустить!

функции - это набот инструкций, который выполняет конкретную задачу и в дополнение может вернуть какое-либо значение.
Можно извлечь фрагмент кода, который используется более одного раза, поместить его в функцию и вызвать функцию по имени в тот
момент, когда это будет необходимо.
Каждая функция компилируется один раз независимо от частоты ее вызовов.";


echo "<br>";
echo $text_about_function;





echo <<<_END
функция print является псведофункцией и поэтому круглые скобки можно опустить!



функции - это набот инструкций, который выполняет конкретную задачу и в дополнение может вернуть какое-либо значение.
Можно извлечь фрагмент кода, который используется более одного раза, поместить его в функцию и вызвать функцию по имени в тот
момент, когда это будет необходимо.
Каждая функция компилируется один раз независимо от частоты ее вызовов.
_END;


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Выполнение кода: " . "строка " . __LINE__ . "<br>выполняемый документ" . __FILE__ ;


echo "<br>";echo "<br>";echo "<br>";




echo "<h1>Проверка html в php</h1>";



echo "<br>";
echo "<br>";
echo "<br>";


$string_how = __LINE__;
echo $string_how;
echo $_COOKIE;


echo "<br>";

echo $_POST;
echo "<br>";




echo "<a href=\"test.php\">Ссылка на тренировочный файл php</a>";



echo $came_from;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$data_to_day = 335;

$happy_new_year = 365 - $data_to_day;

if ($happy_new_year <= 30)
echo "Скоро Новый год!";
else {
  echo "Еще пожить надо!";
}


echo "<hr>";
echo "<br>";
$i = 0;
if ($i-- == 0) echo $i;



echo "<hr><br>";

$object = new User;
print_r($object); echo "<br>";


$object -> name = "Joe";
$object -> password = "mypass";
$object -> save_user();
echo "<br>";
print_r($object);

class User {
  public $name, $password;

  function save_user()
  {
    echo "Сюда вводится код, сохраняющий данные пользователя";
  }
}

echo "<br><hr><br>";

$object = new Son;
$object->test();
$object->test2();

class Dad
{
  function test()
  {
    echo "[class Dad] Я твой отец<br>";
  }
}
 class Son extends Dad
 {
   function test()
   {
     echo "[class Son] Я Лука<br>";
   }
   function test2()
   {
     parent::test();
   }
 }

$Dad_object = new Dad;
$Dad_object->test();





if (isset($days)) {
  echo $days;
}
else {
  echo "Такая переменная не существует";
}



echo "<br>";

$days = 335;
$daysinyear = 365;

if ($daysinyear - $days <= 30) {
  echo "Скоро новый год";
}


echo "<br>";





// проверить идею, вместо инструкции
echo "<br>";
echo "<br>";
echo "<br>";

$example_object = new Parent_class;
$example_object -> anything = 1111;
echo "Объект example_object = " . $example_object -> anything . "<br>";
$example_object_2 = new Parent_class;
$example_object_2 -> anything = 2222;
echo "Объект example_object_2 = " . $example_object_2 -> anything . "<br>";

class Parent_class {
  public $anything;
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";







$example_object_3 = new Parent_class_2;
$example_object_3 -> anything = "alexander333";
$example_object_4 = clone $example_object_3;
$example_object_4 -> anything = "alexander444";

echo $example_object_3 -> anything;

class Parent_class_2 {
  public $anything;
}

























































































echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";













 ?>












<style media="screen">
  body {
    background-color: #000;
    color: #9da45c;
  }
  a {
    color: white;
  }
  hr {
    border: 1px solid #c5a362;
  }
</style>









<!-- aaaaaa -->
