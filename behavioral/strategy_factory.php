<?php

//interface Definer
//{
//    public function define($arg): string;
//}
//
//class Book
//{
//    private Definer $definer;
//    private mixed $args = [];
//
//    public function __construct(Definer $definer)
//    {
//        $this->definer = $definer;
//    }
//
//    public function setArgs(mixed $args): void
//    {
//        $this->args = $args;
//    }
//
//    public function runStrategy(): string
//    {
//        return $this->definer->define($this->args);
//    }
//}
//
//class IntDefine implements Definer
//{
//    public function define($arg): string
//    {
//        return $arg . ' definer for int';
//    }
//}
//
//class StringDefine implements Definer
//{
//    public function define($arg): string
//    {
//        return $arg . ' definer for string';
//    }
//}
//
//class BoolDefine implements Definer
//{
//    public function define($arg): string
//    {
//        return $arg . ' definer for bool';
//    }
//}
//
//class DefinerFactory
//{
//    public static function create($arg): Definer
//    {
//        if (is_int($arg)) {
//            return new IntDefine();
//        } elseif (is_string($arg)) {
//            return new StringDefine();
//        } elseif (is_bool($arg)) {
//            return new BoolDefine();
//        }
//
//        throw new InvalidArgumentException('Unsupported type');
//    }
//}
//
//// Пример использования
//$input = true; // Замените на нужный ввод, например, 123 или true
//$definer = DefinerFactory::create($input);
//
//$book = new Book($definer);
//$book->setArgs($input);
//
//var_export($book->runStrategy());
