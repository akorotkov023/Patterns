<?php

//interface WorkerInterface
//{
//    public function countSalary();
//}
//
//abstract class WorkerDecorator implements WorkerInterface
//{
//    public WorkerInterface $worker;
//
//    /**
//     * @param WorkerInterface $worker
//     */
//    public function __construct(WorkerInterface $worker)
//    {
//        $this->worker = $worker;
//    }
//
//    public function getWorker(): WorkerInterface
//    {
//        return $this->worker;
//    }
//
//}
//
//class Developer implements WorkerInterface
//{
//
//    public function countSalary(): float|int
//    {
//        return 20 * 3000;
//    }
//}
//
//class DeveloperOverTime extends WorkerDecorator
//{
//    public function countSalary(): float|int
//    {
//        return $this->worker->countSalary() + $this->worker->countSalary() * 0.2;
//    }
//}
//
//class DeveloperOverOverTime extends WorkerDecorator
//{
//    public function countSalary(): float|int
//    {
//        return $this->worker->countSalary() + $this->worker->countSalary() * 0.4;
//    }
//}
//
//
//$developer = new Developer();
//
//$developerOverTime = new DeveloperOverTime($developer);
//$developerOverOverTime = new DeveloperOverOverTime($developer);
//
//var_export($developer->countSalary());
//var_export($developerOverOverTime->countSalary());
