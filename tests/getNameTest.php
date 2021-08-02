<?php

namespace PhpLogictest\Test;

use PHPUnit\Framework\TestCase;
use PhpLogictest\Test\FormInput;



class getNameTest extends TestCase
{
    /**
     * @dataProvider dataNumber
     */
    public function testgetNameTest(string $values, string $expected)
    {
        $filternumber = new FormInput();
        $name = $filternumber->getName($values);

        self::assertEquals($expected, $name);
    }

    public function dataNumber()
    {
        return [
            ["Edy Suprayitno 260 Malang", "Edy Suprayitno "],
            ["Dais Nurfaizi Novsa 25 Bekasi", "Dais Nurfaizi Novsa "],
            ["Dais        Nurfaizi Novsa 2500  Bekasi", "Dais        Nurfaizi Novsa "],
        ];
    }
}
