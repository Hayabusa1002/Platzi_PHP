<?php
    /* STRINGS */
    # NOTE: Each code line in PHP is separated with ';'
    # 1. To display something on the web page, PHP use 'echo'
    # 2. For strings PHP uses ' or "
    # 3. We can use HTML elements in PHP strings
    # 4. Control characters do not work with ', but they work with " only when the code is excecuted from the terminal though; from the browser they do not work
    # 5. To concatenate strings in PHP we use '.'
    echo 'STRINGS<br><br>';

    echo "Hola, mundo.<br> estoy usando PHP<br>";
    echo "Hola, mundo.\n estoy usando PHP\n";
    echo 'Hola, mundo.' . "\n" . 'estoy usando PHP';

    echo "<br>-----------------------------------<br>";

    /* VARIABLES */
    # 6. To declare a variable first we type '$' then type the variable name
    # 7. If we type a space, the following code doesn't belong to the variable name
    # 8. We can combine variable values with 'echo'
    # 9. In an 'echo', using " we can type the variables inside the string
    # 10. If we type a variable inside the string using " and this variable is a complex element (such as an array) we have to use {}
    echo 'VARIABLES<br><br>';
    $name       = 'Carlos';
    $last_name  = 'Santana';
    $age        = 25;
    $array      = [ 'manzana', 'pera', 'uva' ]; 
    echo 'No, no. Yo me llamo ' . $name . ' ' . $last_name . "<br>";
    echo "Tengo $age años<br>";
    echo "Mi fruta favorita es la {$array[0]}";

    echo "<br>-----------------------------------<br>";

    // Syntax for define variables
    $numero_1 = 8;
	$numero_2 = 7;
	
	echo $numero_1 + $numero_2 . "\n";

    // Syntax for define constants
	define("NUMERO_PI", 3.14);
	
	echo NUMERO_PI;

    echo "<br>-----------------------------------<br>";

    /* DEBUGGING */
    # 11. Debugging is when we inspect the content of our code or of a variable to verify what value it has at some point in our program.
    # 12. PHP offers us the following functions for debugging: print_r() and var_dump()
    # 13. <pre> is an HTML element that helps us to better visualize debugging
    echo 'DEBUGGING<br><br>';
    $people = [
        "Carlos"    => 22,
        "Mr. Michi" => 15,
        "Juan"      => 65
    ];
    // Debugging using <pre>
    echo "<pre>";
    print_r($people);
    var_dump($people);
    echo "</pre>";

    // Debugging without using <pre>
    print_r($people);
    echo "<br>";
    var_dump($people);

    echo "<br>-----------------------------------<br>";

    /* DATA TYPE */
    // Integer (int)
    $number_1 = 5;
    var_dump($number_1);
    echo "<br>";

    // Floating (float)
    $number_2 = 6.27;
    var_dump($number_2);
    echo "<br>";

    // Double (float)
    $number_3 = 3.2535135456432154;
    var_dump($number_3);
    echo "<br>";

    // Char (string)
    $char = '#';
    var_dump($char);
    echo "<br>";

    // String (string)
    $string  = 'abc#$% aabbcs asd';
    var_dump($string );
    echo "<br>";

    // Boolean (bool)
    $bool_1  = true;
    $bool_2  = false;
    var_dump($bool_1);
    echo "<br>";
    var_dump($bool_2);
    echo "<br>";

    // Null (null)
    $empty  = null;
    var_dump($empty);
    echo "<br>";

    // Undefined
    $und;
    var_dump($und);
    echo "<br>";

    echo "<br>-----------------------------------<br>";
    # 14. PHP has weak typing, which means that it can convert one data type to another depending on the context
    $num_1 = 0;
	$num_2 = 5;
	$num_3 = 21312312;
	$num_4 = '10';
	$num_5 = $num_4 + $num_2;
	$text1 = '15 papas';
	$text2 = $text1 + $num_2;

	var_dump($num_1); echo "<br>";
	var_dump($num_2); echo "<br>";
	var_dump($num_3); echo "<br>";
	var_dump($num_4); echo "<br>";
	var_dump($num_5); echo "<br>";
	var_dump($text1); echo "<br>";
	var_dump($text2); echo "<br>";
?>