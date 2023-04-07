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
?>