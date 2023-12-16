<?php

// indexed array 
$studentsNames =  array("Enos", "Muthiani", "John", "Mary");

// print_r($studentsNames); 


foreach ($studentsNames as $val) {
    echo $val . "\n";
}

// assosiative arrays 
$arr =  array('first' => "banana", 'second' => "orange");

echo $arr['first']  . "<br/>";

// array iteration 
$arr1  =  array("mango", "banana", "tomato");


foreach ($arr1 as  $key => $value) {

    echo $key . "-->" . $value . "<br/>";
}

// example of multidimensional array 


$array = array(
    array(
        "name" => "Burger",
        "price" => 5,
        "quantity" => 10
    ),
    array(
        "name" => "Cola",
        "price" => 2,
        "quantity" => 4
    ),
    array(
        "name" => "Juice",
        "price" => 3,
        "quantity" => 7
    ),
    array(
        "name" => "Milk",
        "price" => 2,
        "quantity" => 6
    )
);

echo '<table border="1">';
echo "<tr><th>Name</th><th>Price</th><th>Quantity</th><th>Total
    Price</th></tr>";
foreach ($array as $row) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['quantity'] . "</td>";
    echo "<td>" . ($row['price'] * $row['quantity']) . "</td>";
    echo "</tr>";
}
echo "</table>";


// reverse array 
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));

// reverse using foreach 
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
$reverse_a=array_reverse($a);
foreach( $reverse_a as $r ) {
echo "$r<br />";
}
setcookie("cookie", "Enos Muthiani", time()+3600);

echo $_COOKIE["cookie"];
print($_COOKIE["cookie"]); 


?>