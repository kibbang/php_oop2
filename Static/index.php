<?php
/**
 * Static
 */

// static은 정적 변수나 메소드를 사용할때 붙여줌

class A {
    public static $message;

    public function foo()
    {
        return self::$message;
        // static 함수에서는 $this를 사용할 수 없음
    }
}
var_dump(A::$message);

$className = 'A';
$a = new $className();
