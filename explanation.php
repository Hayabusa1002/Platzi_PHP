<?php
    /* ARRAY */
    # NOTE: Each code line in PHP is separated with ';'
    # 1. To declare an array in PHP we use assignation symbol '=', the brackets '[]' and the values are separate by ','
    # 2. We also can declare an array in PHP with 'array()' function
    echo 'ARRAY<br><br>';

    $ages_1 = [20, 18, 40];
    $ages_2 = array(20, 18, 40);

    echo "Una de las edades que esta dentro es " . $ages_2[2] . ". ";
    echo "<br>";
    echo "Mientras que otra edad es " . $ages_1[1];
    echo "<br>";

    echo "<br>-----------------------------------<br>";

    /* ASOCIATIVE ARRAY */
    # 3. Asociative arrays are like the arrays, but the keys of each value must be declared by the dev
    # 4. To associate the key with the value we use '=>'
    echo 'ASOCIATIVE ARRAY<br><br>';

    $cafes = array(
        "Capuccino" => 50,
        "Latte" => 49,
        "Americano" => 70
    );
    
    echo "El precio del cafe Americano es de {$cafes['Americano']}";
    echo "<br>";
    
    $personas = array(
    
        "Carlos" => array(
            "edad" => 20,
            "apellido" => "Santana"
        ),
    
        "Mr.Michi" => array(
            "edad" => 18,
            "apellido" => "Michisancio"
        ),
    
    );
    
    echo "La informacion de Mr. Michi es: Edad: " . $personas["Mr.Michi"]["edad"] . " Apellido: " . $personas["Mr.Michi"]["apellido"];
    echo "<br>";
?>