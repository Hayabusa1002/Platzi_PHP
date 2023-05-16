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

    echo "<br>-----------------------------------<br>";

    /* CASTING */
    # Casting is when we force a data type to become another data type

    # 15. Casting to integer: (int) / (integer)
    // String to Integer
    $number_string = "5";               // string
	$number_int = (int) $number_string; // integer
    var_dump($number_string); echo "<br>";
    var_dump($number_int);    echo "<br>";

    // Floating to Integer
    $number = 5.89;          // floating
	$number = (int) $number; // integer
    var_dump($number); echo "<br>";

    // Boolean to Integer
    $true  = true;          // boolean true
    $false = false;         // boolean false
	$true  = (int) $true;   // integer
    $false = (int) $false;  // integer
    var_dump($true); echo "<br>";
    var_dump($false); echo "<br>";

    // NULL to Integer
    $null = null;           // NULL
	$null = (int) $null;    // integer
    var_dump($null); echo "<br>";

    # 16. Casting to floating: (float) / (double) / (real)
    // Integer to Floating
    $number = 7;                // integer
	$number = (float) $number;  // integer
    var_dump($number); echo "<br>";

    // String to Floating
    $number = '7.25';           // string
	$number = (float) $number;  // integer
    var_dump($number); echo "<br>";

    // Boolean to Floating
    $true  = true;            // boolean true
    $false = false;           // boolean false
	$true  = (float) $true;   // floating
    $false = (float) $false;  // floating
    var_dump($true); echo "<br>";
    var_dump($false); echo "<br>";

    // NULL to Floating
    $null = null;           // NULL
	$null = (float) $null;  // integer
    var_dump($null); echo "<br>";

    # 17. Casting to string: (string)
    // Integer to String
    $number = 7;                // integer
	$number = (string) $number; // string
    var_dump($number); echo "<br>";

    // Floating to String
    $number = '7.25';           // floating
	$number = (string) $number; // string
    var_dump($number); echo "<br>";

    // Boolean to String
    $true  = true;              // boolean true
    $false = false;             // boolean false
	$true  = (string) $true;    // string
    $false = (string) $false;   // string
    var_dump($true); echo "<br>";
    var_dump($false); echo "<br>";

    // NULL to Floating
    $null = null;            // NULL
	$null = (string) $null;  // string
    var_dump($null); echo "<br>";

    # 18. Casting to boolean: (bool) / (boolean)
    // Integer to Boolean
    $number = 0;              // integer
	$number = (bool) $number; // boolean
    var_dump($number); echo "<br>";

    // Floating to Boolean
    $number = 7.45;           // floating
	$number = (bool) $number; // boolean
    var_dump($number); echo "<br>";

    // String to Boolean
    $text = 'abc';            // string
	$text = (bool) $text;     // boolean
    var_dump($text); echo "<br>";

    // NULL to Boolean
    $null = null;             // NULL
	$null = (bool) $null;   // string
    var_dump($null); echo "<br>";

    # 19. Casting to another data type: (array) / (object) / (object)

    echo "<br>-----------------------------------<br>";

    /* LOGICAL OPERATORS */
    $michis_felinos             = true;
	$michis_4_patas             = true;
	$michis_vuelan              = false;
	$michis_programan_con_PHP   = false;
	
	// AND
	var_dump($michis_felinos && $michis_4_patas);
	echo "<br>";

	// OR
	var_dump($michis_4_patas || $michis_vuelan);
	echo "<br>";
	
	// NOT
	var_dump(!$michis_4_patas);
	echo "<br>";
	
	// Exception: The result is not the same when we use 'and' instead '&&' (the same for the others operators)
	$resultado = $michis_4_patas and $michis_programan_con_PHP;
	var_dump($resultado);

    echo "<br>-----------------------------------<br>";

    /* ARITHMETIC OPERATORS */
    $resultado = 5 ** 3; // 5 x 5 x 5
    echo $resultado;
    echo "<br>";
    echo (5 * 6) . " " . (80 / 4);
    echo "<br>";
    echo 5 / 2;
    echo "<br>";
    echo 5 % 2;
    echo "<br>";

    $horas = 7501;
    echo "$horas segundo convertidos a horas son " . ($horas / 3600) . "<br>";
    echo "Sobran " . ($horas % 3600) . " segundos.";

    echo "<br>-----------------------------------<br>";

    /* RELATIONAL OPERATORS: COMPARATION */
	$a = 5;
    $b = 5;
    $b2 = "5";
    $c = 9;
    $d = 2;

    // == Igual
    var_dump( $a == $b );   echo "<br>";
    var_dump( $a == $b2 );  echo "<br>";

    // === Idéntico
    var_dump( $a === $b );  echo "<br>";
    var_dump( $a === $b2 ); echo "<br>";

    // != Diferente
    var_dump( $a != $b );   echo "<br>";
    var_dump( $a != $b2 );  echo "<br>";

    // !== Diferente
    var_dump( $a !== $b );  echo "<br>";
    var_dump( $a !== $b2 ); echo "<br>";

    // < Menor que
    var_dump( $a < $b );    echo "<br>";
    var_dump( $c < $b );    echo "<br>";
    var_dump( $d < $b );    echo "<br>";

    // > Mayor que
    var_dump( $a > $b );    echo "<br>";
    var_dump( $c > $b );    echo "<br>";
    var_dump( $d > $b );    echo "<br>";

    // >= Mayor o igual que
    var_dump( $a >= $b );   echo "<br>";
    var_dump( $c >= $b );   echo "<br>";
    var_dump( $d >= $b );   echo "<br>";

    // <= Menor o igual que
    Var_dump( $a <= $b );   echo "<br>";
    var_dump( $c <= $b );   echo "<br>";
    var_dump( $d <= $b );   echo "<br>";

    // <=> Nave espacial
    echo 2 <=> 1;           echo "<br>"; # 1
    echo 1 <=> 1;           echo "<br>"; # 0
    echo -50 <=> 1;         echo "<br>"; # -1

    // ?? Fusión de null
    $edad_de_pepito = 23;
    echo $edad_de_juanito ?? $edad_de_pepito ?? $edad_de_jaimito;

    echo "<br>-----------------------------------<br>";

    /* RELATIONAL OPERATORS: INCREASE AND DECREASE */
    $a = 5;
    $b = 5;
    $c = 9;
    $d = 9;

    // Pre-incremento
    var_dump(++$a); echo "<br>";

    // Post-incremento
    var_dump($b++); echo "<br>";

    // Pre-decremento
    var_dump(--$c); echo "<br>";

    // Post-incremento
    var_dump($d--); echo "<br>";

    echo "<br>-----------------------------------<br>";

    /* OTHER OPERATORS */
    // Asignación
	$a = 5;
    $b = 5;
    $c = 5;
    $d = 10;
    $e = "Carlos";
    
    // Adición
    var_dump($a += 10); echo "<br>";

    // Sustracción
    var_dump($b -= 10); echo "<br>";

    // Multitplicación
    var_dump($c *= 10); echo "<br>";

    // División
    var_dump($d /= 2);  echo "<br>";

    // Concatenación
    var_dump($e . " " . "Santana"); echo "<br>";
?>