/* ООП. Static и final
Задание: Напишите класс Singer, в котором объявите статическое свойство "name" равное "John", и статический метод toSing(), из которого нужно получить доступ к свойству "name" и вернуть его (используя return)
*/
<?php
class Singer {
    static $name = "John";
    static function toSing() {
        return Singer::$name;
    }
}
?>
