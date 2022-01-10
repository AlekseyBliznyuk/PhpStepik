/* ООП. Наследование классов
Задание: Напишите класс Singer, который бы наследовал уже созданный класс Musician
*/
<?php
class Musician {
    public $name;
    public function toPlay() {
        echo "Playing on piano";
    }
}

class Singer extends Musician {
}
?>
