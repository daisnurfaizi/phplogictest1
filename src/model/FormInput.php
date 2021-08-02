<?php

namespace PhpLogictest\Test;

class FormInput
{
    // untuk menghandle Umur
    public function FilterNumber($age)
    {
        $number = str_replace(['+', '-'], '', filter_var($age, FILTER_SANITIZE_NUMBER_INT));
        return $number;
    }
    // untuk menghandle nama
    public function getName($value)
    {
        $num_char = strlen($value);
        $text = $value;

        $char = $text[$num_char - 1];
        while ($char != is_numeric($char)) {
            $char = $text[--$num_char]; // Cari spasi pada posisi 
        }
        return substr($text, 0, $num_char - 1);
    }
    // untuk menghandle kota
    public function getCity($value)
    {

        $num_char = strlen($value);
        $text = $value;
        $char = $text[$num_char - 1];
        while ($char != is_numeric($char)) {
            $char = $text[--$num_char]; // Cari spasi pada posisi
        }
        $city = substr($text, $num_char - strlen($text));
        return preg_replace('/[0-9]+/', '', $city);
    }
}
