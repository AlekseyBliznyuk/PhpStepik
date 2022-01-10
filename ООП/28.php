/* ООП. Наследование классов
Задание: У вас есть интерфейс IMusician. Реализуйте этот интерфейс в классе Guitarist. Функция в этом классе должна выводить "playin a guitar"
*/
<?php
interface IMusician {
    public function play();
}

class Guitarist implements IMusician {
    public function play() {
        echo "playin a guitar";
    }
}
?>
