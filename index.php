<?php
    /* STRINGS */
    # NOTE: Each code line in PHP is separated with ';'
    # 1. To display something on the web page, PHP use 'echo'
    # 2. For strings PHP uses ' or "
    # 3. We can use HTML elements in PHP strings
    # 4. Control characters do not work with ', but they work with " only when the code is excecuted from the terminal though; from the browser they do not work
    # 5. To concatenate strings in PHP we use '.'
    echo "Hola, mundo.<br> estoy usando PHP<br>";
    echo "Hola, mundo.\n estoy usando PHP\n";
    echo 'Hola, mundo.' . "\n" . 'estoy usando PHP';

    /* VARIABLES */
    # 6. To declare a variable first we type '$' then type the variable name
    # 7. If we type a space, the following code doesn't belong to the variable name
    # 8. We can combine variable values with 'echo'
    # 9. In an 'echo', using " we can type the variables inside the string
    # 10. If we type a variable inside the string using " and this variable is a complex element (such as an array) we have to use {}
    $name       = 'Carlos';
    $last_name  = 'Santana';
    $age        = 25;
    $array      = [ 'manzana', 'pera', 'uva' ]; 
    echo 'No, no. Yo me llamo ' . $name . ' ' . $last_name . "<br>";
    echo "Tengo $age años<br>";
    echo "Mi fruta favorita es la {$array[0]}";
?>