<?php

class A {
    public function __toString() {
        return "A.__str__ method";
    }
    
    public function hello() {
        echo "Hello\n";
    }
}

class B {
    public function __toString() {
        return "B.__str__ method";
    }
    
    public function good_evening() {
        echo "Good evening\n";
    }
}

class C extends A {
    
    use BMethods;
}

class D extends B {
    
    use AMethods;
}

trait AMethods {
    public function hello() {
        echo "Hello\n";
    }
}

trait BMethods {
    public function good_evening() {
        echo "Good evening\n";
    }
}

$c = new C();
$d = new D();

$c->hello();
$c->good_evening();

$d->hello();
$d->good_evening();

echo $c . "\n";
echo $d . "\n";

?>