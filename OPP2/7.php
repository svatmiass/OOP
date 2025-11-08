<?php

class Rectangle {
    private $x;
    private $y;
    private $w;
    private $h;
    
    public function __construct($x, $y, $w, $h) {
        $this->x = $x;
        $this->y = $y;
        $this->w = $w;
        $this->h = $h;
    }
    
    public function get_x() {
        return $this->x;
    }
    
    public function get_y() {
        return $this->y;
    }
    
    public function get_w() {
        return $this->w;
    }
    
    public function get_h() {
        return $this->h;
    }
    
    public function intersection($other) {
        $x1 = max($this->x, $other->get_x());
        $y1 = max($this->y, $other->get_y());
        $x2 = min($this->x + $this->w, $other->get_x() + $other->get_w());
        $y2 = min($this->y + $this->h, $other->get_y() + $other->get_h());
        
        $width = $x2 - $x1;
        $height = $y2 - $y1;
        
        if ($width > 0 && $height > 0) {
            return new Rectangle($x1, $y1, $width, $height);
        } else {
            return null;
        }
    }
}

$rect1 = new Rectangle(0, 0, 5, 5);
$rect2 = new Rectangle(10, 10, 3, 3);

$result = $rect1->intersection($rect2);
if ($result === null) {
    echo "No intersection\n";
} else {
    echo "Intersection: x=" . $result->get_x() . 
         ", y=" . $result->get_y() . 
         ", w=" . $result->get_w() . 
         ", h=" . $result->get_h() . "\n";
}

?>