<!-- Task 3: Break on Condition -->

<?php
function Fibonacci_Num() {
    $first = 0;
    $second = 1;

    for ($i = 0; $i < 10; $i++) {
        if ($first > 100) {
            break;
        }

        echo $first . "<br>";

        $next_num = $first + $second;
        $first = $second;
        $second = $next_num;
    }
}

echo "First 10 Fibonacci numbers (up to 100):<br>";
Fibonacci_Num();


?>