<?php

class MinStat {
    private $numbers;
    
    public function __construct() {
        $this->numbers = [];
    }
    
    public function add_number($number) {
        $this->numbers[] = $number;
    }
    
    public function result() {
        if (empty($this->numbers)) {
            return null;
        }
        return min($this->numbers);
    }
}

class MaxStat {
    private $numbers;
    
    public function __construct() {
        $this->numbers = [];
    }
    
    public function add_number($number) {
        $this->numbers[] = $number;
    }
    
    public function result() {
        if (empty($this->numbers)) {
            return null;
        }
        return max($this->numbers);
    }
}

class AverageStat {
    private $numbers;
    
    public function __construct() {
        $this->numbers = [];
    }
    
    public function add_number($number) {
        $this->numbers[] = $number;
    }
    
    public function result() {
        if (empty($this->numbers)) {
            return null;
        }
        return array_sum($this->numbers) / count($this->numbers);
    }
}


$minstat = new MinStat();
$maxstat = new MaxStat();
$averagestat = new AverageStat();



echo ($minstat->result() === null ? "None" : $minstat->result()) . " " .
     ($maxstat->result() === null ? "None" : $maxstat->result()) . " " .
     ($averagestat->result() === null ? "None" : $averagestat->result()) . "\n";

?>