<?php

//билдер
//class Operator
//{
//    public function make(BuilderInterface $builder): Message
//    {
//        $builder->makeHeader();
//        $builder->makeBody();
//        $builder->makeFooter();
//        $builder->makeCustom();
//        return $builder->getText();
//    }
//}
//
//interface BuilderInterface
//{
//    public function makeHeader();
//    public function makeBody();
//    public function makeFooter();
//    public function makeCustom();
//    public function getText();
//}
//
//class TextBuilder implements BuilderInterface
//{
//    private Message $message;
//
//    public function make()
//    {
//        $this->message = new Message();
//    }
//    public function makeHeader()
//    {
//        $this->message->setPart(new Header('Header tyt...'));
//    }
//    public function makeBody()
//    {
//        $this->message->setPart(new Body('Body tyt...'));
//    }
//    public function makeFooter()
//    {
//        $this->message->setPart(new Footer('Footer tyt...'));
//    }
//    public function makeCustom()
//    {
//        $this->message->setPart(new Custom('Custom tyt...'));
//    }
//    public function getText(): Message
//    {
//        return $this->message;
//    }
//}
//
//class Section
//{
//    private string $text;
//    public function __construct(string $text)
//    {
//        $this->text = $text;
//    }
//
//    public function __toString()
//    {
//        return $this->text;
//    }
//
//}
//
//class Header extends Section
//{
//
//}
//
//class Body extends Section
//{
//
//}
//
//class Footer extends Section
//{
//
//}
//class Custom extends Section
//{
//
//}
//
//
//class Message
//{
//    private string $text = '';
//    public function setPart($part): void
//    {
//        $this->text .= $part . "<br>";
//    }
//    public function getText(): string
//    {
//        return $this->text;
//    }
//}
//
//
//$operator = new Operator();
//$builder = new TextBuilder();
//
//$builder->make();
//$message = $operator->make($builder);
//
//var_export($message->getText());
