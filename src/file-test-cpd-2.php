<?php

class Vide
{
    private $start = 1;
    private $end = 100;
    protected $results = array();
    /**
     * Class Construct
     *
     * @param int $start
     * @param int $end
     */
    public function __construct($start = 1, $end = 100)
    {
        $this->setStart($start);
        $this->setEnd($end);
    }
    /**
     * setEnd
     *
     * @param $end
     */
     public function vidde()
    {
        echo"une fonction vide ";
    }
    public function setEnd($end)
    {
        $this->end = $end;
    }
    /**
     * setStart
     *
     * @param $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }
    
    public function run()
    {
        $counter = $this->start;
        while ($counter <= $this->end) {
            $this->results[$counter] = $this->izVide($counter);
            $counter ++;
        }
        return $this->results;
    }
    
    public function izVide($number)
    {
        if (($number % 3 == 0) && ($number % 5 == 0)) {
            return "Vide";
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
