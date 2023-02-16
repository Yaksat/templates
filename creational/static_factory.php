<?php
//
//interface Worker
//{
//    public function work();
//}
//
//class Developer implements Worker
//{
//    public function work()
//    {
//        printf('im developing');
//    }
//}
//
//class Designer implements Worker
//{
//    public function work()
//    {
//        printf('im designing');
//    }
//}
//
//class WorkerFactory
//{
//    public static function make($workName): ?Worker
//    {
//        $ClassName = strtoupper($workName);
//
//        if (class_exists($ClassName)) {
//            return new $ClassName;
//        }
//        return null;
//    }
//}
//
//$developer = WorkerFactory::make('developer');
//$developer->work();
//
//$designer = WorkerFactory::make('designer');
//$designer->work();