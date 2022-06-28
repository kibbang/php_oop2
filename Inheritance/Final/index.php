<?php

/**
 * Final
 */
class A {
    public string $message;

    public final function foo()
    {
        
    }
}

class B extends A {
    public function foo()
    {
        
    }
}
// final은 상속을 할 수 없다.