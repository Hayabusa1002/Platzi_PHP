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
?>