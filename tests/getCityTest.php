<?php

namespace PhpLogictest\Test;

use PHPUnit\Framework\TestCase;
use PhpLogictest\Test\FormInput;



class getCityTest extends TestCase
{
    /**
     * @dataProvider dataNumber
     */
    public function testgetCityTest(string $values, string $expected)
    {
        $filternumber = new FormInput();
        $city = $filternumber->getCity($values);

        self::assertEquals($expected, $city);
    }

    public function dataNumber()
    {
        return [
            ["Edy Suprayitno 260 Malang", " Malang"],
            ["Dais Nurfaizi Novsa 25 Bekasi", " Bekasi"],
            ["Dais        Nurfaizi Novsa 2500  Bekasi", "  Bekasi"],
            ["Dais Nurfaizi Novsa 2500 Bekasi Utara", " Bekasi Utara"],
        ];
    }
}
