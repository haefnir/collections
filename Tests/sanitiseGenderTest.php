<?php
require '../functions/sanitiseGender.php';

use PHPUnit\Framework\TestCase;

class sanitiseGenderTest extends TestCase{

    public function testSuccessSanitiseGender(){
        $input = 'male';

        $expected = 0;

        $case = sanitiseGender($input);

        $this->assertEquals($expected, $case);
    }

    public function testNullSuccessSanitiseGender(){
        $input = NULL;

        $expected = NULL;

        $case = sanitiseGender($input);

        $this->assertEquals($expected, $case);
    }

    public function testFemaleSuccessSanitiseGender(){
        $input = 'female';

        $expected = 1;

        $case = sanitiseGender($input);

        $this->assertEquals($expected, $case);
    }
}