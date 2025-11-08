<?php

class Table {
    private $rows;
    private $cols;
    private $data;
    
    public function __construct($rows, $cols) {
        $this->rows = $rows;
        $this->cols = $cols;
        $this->data = array_fill(0, $rows, array_fill(0, $cols, 0));
    }
    
    public function get_value($row, $col) {
        if ($row < 0 || $row >= $this->rows || $col < 0 || $col >= $this->cols) {
            return null;
        }
        return $this->data[$row][$col];
    }
    
    public function set_value($row, $col, $value) {
        $this->data[$row][$col] = $value;
    }
    
    public function n_rows() {
        return $this->rows;
    }
    
    public function n_cols() {
        return $this->cols;
    }
}

$table = new Table(3, 5);

$table->set_value(0, 1, 10);
$table->set_value(1, 2, 20);
$table->set_value(2, 3, 30);

for ($i = 0; $i < $table->n_rows(); $i++) {
    for ($j = 0; $j < $table->n_cols(); $j++) {
        echo $table->get_value($i, $j);
        if ($j < $table->n_cols() - 1) {
            echo " ";
        }
    }
    echo "\n";
}

?>