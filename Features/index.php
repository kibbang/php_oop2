<?php
/**
 * Properties and Methods
 */

class ExClass1
{
    public $message = "Hello World!";

    public function foo()
    {
        return $this->message;
    }

}
$a = new ExClass1();
var_dump($a->foo());
echo '<br>';

/**
 * Inherit(상속)
 */

class ExClass2 extends ExClass1 {

}
$b = new ExClass2();
var_dump($b->foo());

/**
 * In Functions
 */

function foo(ExClass1 $a) {
    return $a->foo();
}
var_dump(foo($b));
/**
 * Context
 */
class ExClass3 extends ExClass1 {
    public function foo()
    {
        return new self(); // 자기 자신 ExClass3가 나옴
//        return new static(); // ExClass4
//        return new parent(); // ExClass1
    }
}

class ExClass4 extends ExClass3 {

}
$d = new ExClass4();
var_dump($d->foo());

/**
 * Constants
 */

class ExClass5{
    const MESSAGE = "hello world";

    public function getConstants()
    {
        return self::MESSAGE; // :: -> 스코프 해결 연산자
    }

    public function getClassName()
    {
        return __CLASS__; // magic methods
    }

}
$e = new ExClass5();
var_dump($e->getConstants());
var_dump(E::MESSAGE);
var_dump($e->getClassName());
/**
 * instanceof
 */

$f = new ExClass4();
var_dump($f instanceof ExClass3);