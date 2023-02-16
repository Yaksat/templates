<?php
//
//interface Formatter
//{
//    public function format($str): string;
//}
//
//class SimpleText implements Formatter
//{
//    public function format($str): string
//    {
//        return $str;
//    }
//}
//
//class HtmlText implements Formatter
//{
//    public function format($str): string
//    {
//        return "<p>$str<p>";
//    }
//}
//
//abstract class BridgeService
//{
//    public Formatter $formatter;
//
//    /**
//     * @param Formatter $formatter
//     */
//    public function __construct(Formatter $formatter)
//    {
//        $this->formatter = $formatter;
//    }
//
//    abstract public function getFormatter($str): string;
//}
//
//class SimpleTextService extends BridgeService
//{
//    public function getFormatter($str): string
//    {
//        return $this->formatter->format($str);
//    }
//}
//
//class HtmlTextService extends BridgeService
//{
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
//var_dump($simpleTextService->getFormatter('text'));
//var_dump($htmlTextService->getFormatter('text'));