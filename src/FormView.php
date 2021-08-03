<?php

use PhpLogictest\Test\FormInput;

require __DIR__ . "/model/FormInput.php";
require __DIR__ . "/service/FormService.php";
$data = $_POST['Name'];
$forminputmodel = new FormInput();
$forminputservice = new FormService($forminputmodel);
$forminputservice->getValueInput($data);
