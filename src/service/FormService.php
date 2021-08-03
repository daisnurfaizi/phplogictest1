<?php

use PhpLogictest\Test\FormInput;


class FormService
{
    private FormInput $forminput;

    public function __construct(FormInput $forminput)
    {
        $this->forminput = $forminput;
    }

    public function getValueInput($value)
    {
        $form = [
            'nama' => $this->forminput->getName($value),
            'umur' => $this->forminput->FilterNumber($value),
            'kota' => $this->forminput->getCity($value)
        ];

        echo  json_encode($form);
    }
}
