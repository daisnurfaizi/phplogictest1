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
        $name = substr($text, 0, $num_char - 1);
        return preg_replace('/[0-9]+/', '', $name);
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
        $filtercity = preg_replace('/[0-9]+/', '', $city);
        return preg_replace("/th|tahun/i", "", $filtercity);
    }
}
