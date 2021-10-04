<?php
$array = array("1", "5", "9");
$value1 = count($array);
echo $value1."<br>";

class CountMe implements Countable
{
    protected $_myCount = 100;

    public function count()
    {
        return $this->_myCount;
    }
}

$countable = new CountMe();
$value2 = count($countable);//100
echo $value2."<br>";

$food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));
$value3 = count($food, COUNT_RECURSIVE);
echo $value3."<br>";

$value4 = count($food);
//or
$value5 = count($food, COUNT_NORMAL);
echo $value4."<br>";
echo $value5."<br>";
?>