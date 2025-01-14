<?php

//abstract class Expression
//{
//    abstract public function interpret(Context $context): bool;
//}
//
//class Context
//{
//    private array $worker = [];
//
//    public function setWorker(string $worker): void
//    {
//        $this->worker[] = $worker;
//    }
//
//    public function lookUp($key): string | bool
//    {
//        if (isset($this->worker[$key])) {
//            return $this->worker[$key];
//        }
//        return false;
//    }
//
//}
//
//class VariableExp extends Expression
//{
//    private int $key;
//
//    /**
//     * @param int $key
//     */
//    public function __construct(int $key)
//    {
//        $this->key = $key;
//    }
//
//
//    public function interpret(Context $context): bool
//    {
//        return $context->lookUp($this->key);
//    }
//}
//
//class AndExp extends Expression
//{
//
//    private int $keyOne;
//    private int $keyTwo;
//
//    /**
//     * @param int $keyOne
//     * @param int $keyTwo
//     */
//    public function __construct(int $keyOne, int $keyTwo)
//    {
//        $this->keyOne = $keyOne;
//        $this->keyTwo = $keyTwo;
//    }
//
//
//    public function interpret(Context $context): bool
//    {
//        return $context->lookUp($this->keyOne) && $context->lookUp($this->keyTwo);
//    }
//}
//
//class OrExp extends Expression
//{
//    private int $keyOne;
//    private int $keyTwo;
//
//    /**
//     * @param int $keyOne
//     * @param int $keyTwo
//     */
//    public function __construct(int $keyOne, int $keyTwo)
//    {
//        $this->keyOne = $keyOne;
//        $this->keyTwo = $keyTwo;
//    }
//
//
//    public function interpret(Context $context): bool
//    {
//        return $context->lookUp($this->keyOne) || $context->lookUp($this->keyTwo);
//    }
//}
//
//$context = new Context();
//$context->setWorker('bob');
//$context->setWorker('Boris');
//
//$varExp = new VariableExp(1);
//$andExp = new AndExp(0, 0);
//$orExp = new OrExp(1, 3);
//
//var_export($varExp->interpret($context));
//echo "<br>";
//var_export($andExp->interpret($context));
//echo "<br>";
//var_export($orExp->interpret($context));
