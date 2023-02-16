<?php
//
//interface WorkerFactory
//{
//    public static function makeDeveloper(): Developer;
//    public static function makeDesigner(): Designer;
//}
//
//class NativeWorkerFactory implements WorkerFactory
//{
//    public static function makeDeveloper(): Developer
//    {
//        return new NativeDeveloper();
//    }
//
//    public static function makeDesigner(): Designer
//    {
//        return new NativeDesigner();
//    }
//}
//
//class OutsourceWorkerFactory implements WorkerFactory
//{
//    public static function makeDeveloper(): Developer
//    {
//        return new OutsourceDeveloper();
//    }
//
//    public static function makeDesigner(): Designer
//    {
//        return new OutsourceDesigner();
//    }
//}
//
//interface Worker
//{
//    public function work();
//}
//
//interface Developer extends Worker
//{
//
//}
//
//interface Designer extends Worker
//{
//
//}
//
//class NativeDeveloper implements Developer
//{
//    public function work()
//    {
//        printf('im developer as native');
//    }
//}
//
//class OutsourceDeveloper implements Developer
//{
//    public function work()
//    {
//        printf('im developer as outsource');
//    }
//}
//
//class NativeDesigner implements Designer
//{
//    public function work()
//    {
//        printf('im designer as native');
//    }
//}
//
//class OutsourceDesigner implements Designer
//{
//    public function work()
//    {
//        printf('im designer as outsource');
//    }
//}
//
//$nativeDeveloper = NativeWorkerFactory::makeDeveloper();
//$outsourceDeveloper = OutsourceWorkerFactory::makeDeveloper();
//$nativeDesigner = NativeWorkerFactory::makeDesigner();
//$outsourceDesigner = OutsourceWorkerFactory::makeDesigner();
//
//$outsourceDesigner->work();