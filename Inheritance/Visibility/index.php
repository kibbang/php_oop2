<?php
/**
 * Visibility
 */

class A {
    public function __construct()
    {

    }
    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private';
}
$a = new A();
var_dump($a->public); // 외부 접근 가능
//var_dump($a->protected); // 상속 관계에서만 접근 가능
//var_dump($a->private); // 자신 아니면 접근 불가

class B extends A {
    private string $message2 = "Hello world";
    private static $instance;

    private function __construct()
    {
        var_dump($this->message2);
    }

    public function getInstance()
    {
        return self::$instance ?: self::$instance = new self();
    }
}

var_dump(B::getInstance());