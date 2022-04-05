<?php
require '../functions/sanitiseText.php';

use PHPUnit\Framework\TestCase;

class sanitiseTextTest extends TestCase{

    public function testSuccessSanitiseText(){
        $input = 'male    ';

        $expected = 'male';

        $case = sanitiseText($input);

        $this->assertEquals($expected, $case);
    }

    public function testMalformedSanitiseText(){
        $input = [26];

        $this->expectException(TypeError::class);

        sanitiseText($input);

    }
}