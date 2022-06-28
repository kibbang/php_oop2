<?php
/**
 * Anonymous Classes (익명 클래스)
 */

class A {
    public function foo()
    {
        return "Hello world";
    }
}
class B {
    public function create()
    {
        return new class extends A {};
    }
}
$a = new B();
var_dump($a->create()->foo());