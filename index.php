<?php
    // punkciis dakavsgireba
    define('CURRENT_DIR', __DIR__); // proektis misamarti
    require_once(CURRENT_DIR . '/persons.php');
    echo $example_persons_array[0]['fullname'];
    echo "<br>";
    require_once(CURRENT_DIR . '/function/getFullnameFromParts.php');