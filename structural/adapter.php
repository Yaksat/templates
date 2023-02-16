<?php
//
//interface NativeWorker
//{
//    public function countSalary(): int;
//}
//
//interface OutsourceWorker
//{
//    public function countSalaryByHour($hours): int;
//}
//
//class NativeDeveloper implements NativeWorker
//{
//    public function countSalary(): int
//    {
//        return 3000 * 20;
//    }
//}
//
//class OutsourceDeveloper implements OutsourceWorker
//{
//
//    public function countSalaryByHour($hours): int
//    {
//        return $hours * 300;
//    }
//}
//
//class OutsourceWorkerAdapter implements NativeWorker
//{
//    private OutsourceWorker $outsourceWorker;
//
//    public function __construct(OutsourceWorker $outsourceWorker)
//    {
//        $this->outsourceWorker = $outsourceWorker;
//    }
//
//    public function countSalary(): int
//    {
//        return $this->outsourceWorker->countSalaryByHour(40);
//    }
//}
//
//$nativeDeveloper = new NativeDeveloper();
//$outsourceDeveloper = new OutsourceDeveloper();
//
//$outsourceWorkerAdapter = new OutsourceWorkerAdapter($outsourceDeveloper);
//
//var_dump($outsourceWorkerAdapter->countSalary());
//
