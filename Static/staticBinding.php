<?php
/**
 * Static Binding
 */

class A {
    public static function foo()
    {
        static::who();
    }

    public static function who()
    {
        var_dump(__CLASS__);
    }
}

class B extends A {
    public static function test()
    {
        parent::foo();
        self::who();
    }

    public static function who()
    {
        var_dump(__CLASS__);
    }
}

$b = new B();
$b->test();