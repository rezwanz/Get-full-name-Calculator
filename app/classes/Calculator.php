<?php


namespace App\classes;


class Calculator
{
    public $firstNumber;
    public $lastNumber;
    public $operator;
    public $result;

    public function __construct($post)
    {
        $this->firstNumber = $post['first_number'];
        $this->lastNumber = $post['last_number'];
        $this->operator = $post['operator'];
    }

    public function addition ()
    {
        return $this->firstNumber + $this->lastNumber;
    }
    public function substract ()
    {
        return $this->firstNumber - $this->lastNumber;
    }
    public function multiply ()
    {
        return $this->firstNumber * $this->lastNumber;
    }
    public function divide ()
    {
        return $this->firstNumber / $this->lastNumber;
    }
    public function mod ()
    {
        return $this->firstNumber % $this->lastNumber;
    }

    public function index ()
    {
        switch ($this->operator)
        {
            case '+' : $this->result = $this->addition();
            break;
        }
        switch ($this->operator)
        {
            case '-' : $this->result = $this->substract();
            break;
        }
        switch ($this->operator)
        {
            case '*' : $this->result = $this->multiply();
            break;
        }
        switch ($this->operator)
        {
            case '/' : $this->result = $this->divide();
            break;
        }
        switch ($this->operator)
        {
            case '%' : $this->result = $this->mod();
            break;
        }
        return $this->result;
    }
}