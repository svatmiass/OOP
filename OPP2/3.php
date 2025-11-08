<?php

class Selector {
    private $numbers;
    
    public function __construct($numbers) {
        $this->numbers = $numbers;
    }
    
    public function get_odds() {
        $result = [];
        foreach ($this->numbers as $num) {
            if ($num % 2 != 0) {
                $result[] = $num;
            }
        }
        return $result;
    }
    
    public function get_evens() {
        $result = [];
        foreach ($this->numbers as $num) {
            if ($num % 2 == 0) {
                $result[] = $num;
            }
        }
        return $result;
    }
}

$values = [];
$selector = new Selector($values);

$odds = $selector->get_odds();
$evens = $selector->get_evens();

echo implode(' ', $odds) . "\n";
echo implode(' ', $evens) . "\n";

?>