
<?php
    /*php data types
    1. bool
    2. int
    3. float
    4. string
    5. array
    6. object
    7. callable
    8. iterable
    9. resource
    10. NULL
    */

    // Boolean can be true or false 
    $x = true;
    $is_friend = false;
    echo var_dump($x);
    echo "<br>";
    echo var_dump($is_friend);
    echo "<br>";

    //  Integer - non decimal number 
    $income = 25000;
    $name = "Reza";
    echo "income = $income <br>";

    // Float - Decimal point number
    $average_number = 78.5;
    echo $average_number;
    echo "<br>";

    // String - sequence of characters
    $name = "Reza";
    echo "My name is $name";
    echo "<br>";

    // Array - used to store multiple values in a single variable
    $friends = array("daud", "hasib", "ome");
    echo var_dump($friends);
    echo "<br>";
    echo $friends[0];
    echo "<br>";

    // Object - Instances of classes
    class foo
    {
        function do_foo()
        {
            echo "Doing foo."; 
        }
    }

    $bar = new foo;
    $bar->do_foo();

    // NULL - The special NULL value represents a variable with no value. 
    $var = NULL;




?>


