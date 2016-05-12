<?php

class Fizzbuzz6
{
    private $start = 1;
    private $end = 100;
    protected $results = array();
    public function __construct($start = 1, $end = 100)
    {
        $this->setStart($start);
        $this->setEnd($end);
    }
    public function vide()
    {
        echo"une fonction vide ";
    }
    public function setEnd($end)
    {
        $this->end = $end;
    }
    public function setStart($start)
    {
        $this->start = $start;
    }
     public function run()
    {
        $counter = $this->start;
        while ($counter <= $this->end) {
            $this->results[$counter] = $this->izFizzBuzz($counter);
            $counter ++;
        }
        return $this->results;
    }
    
    public function izFizzBuzz($number)
    {
        if (($number % 3 == 0) && ($number % 5 == 0)) {
            return "FizzBuzz";
        }
        if ($number % 3 == 0) {
            return "Fizz";
        }
        if ($number % 5 == 0) {
            return "Buzz";
        }
        return $number;
    }
}
