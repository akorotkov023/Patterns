<?php

//interface Formatter
//{
//    public function format(string $str): string;
//}
//
//class SimpleText implements Formatter
//{
//    public function format(string $str): string
//    {
//        return $str;
//    }
//}
//
//class HtmlText implements Formatter
//{
//    public function format(string $str): string
//    {
//        return "<p> $str </p>";
//    }
//}
//
//abstract class BridgeService
//{
//    protected Formatter $formatter;
//
//    /**
//     * @param Formatter $formatter
//     */
//    public function __construct(Formatter $formatter)
//    {
//        $this->formatter = $formatter;
//    }
//    abstract public function getFormatter($str);
//
//}
//
//class SimpleTextService extends BridgeService
//{
//
//    public function getFormatter($str): string
//    {
//        return $this->formatter->format($str);
//    }
//}
//
//class HtmlTextService extends BridgeService
//{
//
//    public function getFormatter($str): string
//    {
//        return $this->formatter->format($str);
//    }
//}
//
//$simpleText = new SimpleText();
//$htmlText = new HtmlText();
//
//$simpleTextService = new SimpleTextService($simpleText);
//$htmlTextService = new HtmlTextService($htmlText);
//
//var_export($htmlTextService->getFormatter('Hello'));
