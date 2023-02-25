<?php

use PHPUnit\Framework\TestCase;
require_once 'ModuloFinder.php';

class ModuloFinderTest extends TestCase {
    public function testFindK() {
        // sample test cases
        $data = [
                    [7, 5, 12345, 12339],
                    [5, 0, 4, 0],

                 ];

        foreach ($data as $testCase) {
            $finder = new ModuloFinder;
            $this->assertEquals($testCase[3], $finder->findK($testCase[0], $testCase[1], $testCase[2]));
    }
    }
}