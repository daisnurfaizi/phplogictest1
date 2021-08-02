<?php

namespace PhpLogictest\Test;

use PHPUnit\Framework\TestCase;
use PhpLogictest\Test\FormInput;



class FormInputTest extends TestCase
{
    /**
     * @dataProvider dataNumber
     */
    public function testFilterNumber(string $values, int $expected)
    {
        $filternumber = new FormInput();
        $number = $filternumber->FilterNumber($values);

        self::assertEquals($expected, $number);
    }

    public function dataNumber()
    {
        return [
            ["sdasdasd26asdasd", 26],
            ["..;.;26asdasdas", 26],
            ["asdasdppweqw26asdas", 26],
            ["26tahun", 26],
            ["26th", 26],
            ["26 tahun", 26],
            ["26 th", 26],
        ];
    }
}
