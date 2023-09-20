<!-- Task 4: Fibonacci Series printing using a Function -->

<?php
function Fibonacci_Num($n) {
    $first = 0;
    $second = 1;

    echo "Fibonacci Series for the first $n numbers: <br>";

    for ($i = 0; $i < $n; $i++) {
        
        echo $first . " ";
        if ($i < $n) {
            echo "<br>";
        }


        $next_num = $first + $second;
        $first = $second;
        $second = $next_num;
    }
}

Fibonacci_Num(15);

?>