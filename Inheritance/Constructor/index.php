<?php
/**
 * Constructor, Destructor
 * 생성자: 객체를 생성할때 호출
 * 소멸자: 객체가 소멸할때 호출
 */

class A
{
    public function __construct()
    {
        var_dump(__METHOD__);
    }

    public function __destruct()
    {
        var_dump(__METHOD__);
    }
}

$a = new A();
var_dump("hello world");

/**
 * Constructor Parameters
 */

class B {
    public string $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
}
$b = new B("hello");
/**
 * Inherit
 */

class C extends A
{
    // 상속을 받으면 부모의 생성자도 상속
    public function __construct()
    {
        parent::__construct();
    }

    public function __destruct()
    {
        parent::__destruct();
    }
}
$c = new C();