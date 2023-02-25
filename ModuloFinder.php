<?php
class ModuloFinder {
    private $x;
    private $y;
    private $n;

    public function __construct() {

    }

    public function findK($x,$y,$n) {
        $k = floor(($n - $y) / $x); // find the largest possible multiple of x that is less than or equal to n-y
        return $k * $x + $y; // return the result
    }
}

// sample test cases

do {
    echo "Insert a number > 0, 0 for test \n";
    $t = intval(fgets(STDIN));
} while ($t <0);
// iterate through the test cases and output the result for each one
for ($i = 0; $i < $t; $i++) {

    $x = intval(fgets(STDIN));
    $y = intval(fgets(STDIN));
    $n = intval(fgets(STDIN));
    $finder = new ModuloFinder();
    echo $finder->findK($x, $y, $n) . "\n";
}

