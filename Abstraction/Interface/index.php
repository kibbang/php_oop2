<?php
/**
 * Interface
 */
// 인터페이스는 클래스가 아님

interface A {
    public function foo(); // private, protected는 사용 불가
}
// 인터페이스는 기능적인 부분을 표현할 때 사용
// 인터페이스는 implements를 사용
// 무조건 구현 해줘야함

// 인터페이스끼리의 확장
interface AA extends A {
    public function sayHello();
}
// 이러면 sayHello도 구현을 해줘야함

class B implements A {
    public function foo()
    {
        return __CLASS__;
    }

    public function sayHello(): string
    {
        return "HelloWorld";
    }
}

$b = new B();
var_dump($b->foo());
var_dump($b->sayHello());

