<?php
/**
 * Class Abstraction
 */
abstract class A {
    protected $message = 'hello world';

    public function sayHello()
    {
        return $this->message;
    }
    abstract public function foo();

}
// 상속 클래스는 인스턴스 구현을 할 수 없음
class B extends A {
    public function foo()
    {
        return __CLASS__;
    }
}

$b = new B();
var_dump($b->foo());

// 추상클래스는 같은 인터페이스를 공유
// 최상위 클래스는 독립적으로 객체를 만들어 사용할 수 없고 자식 클래스만으로 사용하기를 원할때 사용