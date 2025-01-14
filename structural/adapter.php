<?php

//interface NativeWorkerInterface
//{
//    public function countSalary(): int;
//}
//
//interface OutsourceWorkerInterface
//{
//    public function countSalaryByHour(int $hour): int;
//}
//
//class NativeDeveloper implements NativeWorkerInterface
//{
//
//    public function countSalary(): int
//    {
//        return 3000 * 20;
//    }
//}
//
//class OutsourceDeveloper implements OutsourceWorkerInterface
//{
//    public function countSalaryByHour(int $hour): int
//    {
//        return $hour * 500;
//    }
//}
//
//class OutsourceWorkerAdapter implements NativeWorkerInterface
//{
//    private OutsourceWorkerInterface $outsourceWorker;
//
//    /**
//     * @param OutsourceWorkerInterface $outsourceWorker
//     */
//    public function __construct(OutsourceWorkerInterface $outsourceWorker)
//    {
//        $this->outsourceWorker = $outsourceWorker;
//    }
//
//
//    public function countSalary(): int
//    {
//        return $this->outsourceWorker->countSalaryByHour(80);
//    }
//}
//
//$nativeDeveloper = new NativeDeveloper();
//
//$outsourceDeveloper = new OutsourceDeveloper();
//
//$outsourceWorkerAdapter = new OutsourceWorkerAdapter($outsourceDeveloper);
//
//var_export($outsourceWorkerAdapter->countSalary());
