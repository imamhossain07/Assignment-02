<?php
/*Even Number*/
function EvenNum() {
    for ($i = 2; $i <= 20; $i += 2) {
        echo $i . "<br>";
    }
}

echo "Using for loop: <br>";
EvenNum();

echo "<br>";

/*While Loop*/
echo "Using while loop: <br>";
$i = 2;
while ($i <= 20) {
    echo $i . "<br>";
    $i += 2;
}
echo "<br>";


/*Do-While Loop*/
echo "Using do-while loop: <br>";
$i = 2;
do {
    echo $i . "<br>";
    $i += 2;   
} while ($i <= 20);
echo "<br>";

?>