<?php

require 'vendor/autoload.php';

<?php

require_once 'MagicClass.php'; // Путь к файлу с классом MagicClass

use App\MagicClass;

$magic = new MagicClass(); // Конструктор вызывается при создании объекта

$magic->property = 'value'; // __set вызывается при попытке установить значение несуществующего свойства

echo $magic->property; // __get вызывается при попытке получить значение несуществующего свойства

isset($magic->property); // __isset вызывается при проверке несуществующего свойства через isset или empty

unset($magic->property); // __unset вызывается при использовании unset на несуществующем свойстве

$serialized = serialize($magic); // __sleep и __serialize вызываются перед сериализацией объекта

$unserialized = unserialize($serialized); // __wakeup и __unserialize вызываются после десериализации объекта

echo $magic; // __toString вызывается при попытке использовать объект как строку

$magic(); // __invoke вызывается при попытке использовать объект как функцию

$clonedMagic = clone $magic; // __clone вызывается при клонировании объекта

var_export($magic); // __set_state вызывается для классов, которые экспортируются с var_export

var_dump($magic); // __debugInfo вызывается при использовании var_dump

$magic->undefinedMethod(); // __call вызывается при вызове несуществующего метода объекта

MagicClass::undefinedStaticMethod(); // __callStatic вызывается при вызове несуществующего статического метода

// Деструктор __destruct вызовется, когда объект $magic будет уничтожен (обычно, при завершении работы скрипта)

?>
