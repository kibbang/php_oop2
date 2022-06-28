<?php
/**
 * Trait
 */
// php는 다중상속을 지원하지 않음 그대신 나온게 Trait
// Trait는 클래스의 일부분

trait A {
    public string $message3 = 'Hello World';

    public function sayHello()
    {
        return $this->message3;
    }
    abstract public function foo();
}

trait AA { // 충돌 발생
    public function sayHello()
    {
        return __TRAIT__;
    }
}

trait AAA { // 충돌 처리
    use A, AA {
        A::sayHello insteadof AA;
        A::sayHello as protected h; // 별칭, 접근제어 변경 가능
    }
}

class B {
    use A;

    public function foo()
    {
        return __CLASS__;
    }
}
$b = new B();
var_dump($b->sayHello());

// 우선순위
class C {
    private string $message4 = "halo";

    public function sayHello()
    {
        return $this->message4;
    }
}

trait D {
    public function sayHello()
    {
        return __TRAIT__;
    }
}

class E extends C {
    use D;

    public function sayHello()
    {
        return __CLASS__;
    }
}
$e = new E();
var_dump($e->sayHello());

// 재정의->trait->상속 순으로 실행됨

