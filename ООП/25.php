/* ООП. Классы и объекты
Задание: Создайте класс Student и метод printData(), который печатает его свойства name и age
*/
<?php
class Student {
    public $name;
    public $age;
    public function printData() {
        echo $this->name;
        echo $this->age;
    }
}
?>
