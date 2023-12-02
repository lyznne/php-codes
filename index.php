<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>

<body>


    <?php
    class Car
    {
        public $color;
        public $model;

        public function __construct($color, $model)
        {

            $this->color  = $color;
            $this->model  = $model;
        }

        public function message()
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }


    $myCar = new Car("black", "Volvo");
    echo $myCar->message();
    echo "<br>";
    $myCar = new Car('red', 'bmw');
    echo $myCar->message();
    echo '<br>';

    define('GREETING', "Welcome to my course");

    function mytest()
    {
        echo GREETING;
    }

    mytest();


    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    }

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo  "$value <br>";
    }

    $age = array("Peter" => "35",  "Ben" => "40", "Joe" => "43");

    foreach ($age as $x => $val) {
        echo "$x  = $val<br>";
    }

    function addNumber(float $a, float $b): float
    {
        return $a + $b;
    }

    echo addNumber(1.2, 5.3);
    echo "<br>";

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";

    ?>


</body>

</html>