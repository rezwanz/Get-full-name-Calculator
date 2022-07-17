<?php

require_once './vendor/autoload.php';

use App\classes\FullName;
use App\classes\Calculator;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'calculator')
    {
        include 'pages/calculator.php';
    }
}

elseif (isset($_POST['btn']))
{
    if ($_POST['btn'] == 'Submit')
    {
        $fullName = new FullName($_POST);
        $name = $fullName->index();
        include 'pages/home.php';
    }
    elseif ($_POST['btn'] == 'calculatorBtn')
    {
        $calculator = new Calculator($_POST);
        $result = $calculator->index();
        include 'pages/calculator.php';
    }
}