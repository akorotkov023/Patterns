<?php

//class WorkerFacade
//{
//    private Developer $developer;
//    private Designer $designer;
//
//    /**
//     * @param Developer $developer
//     * @param Designer $designer
//     */
//    public function  __construct(Developer $developer, Designer $designer)
//    {
//        $this->developer = $developer;
//        $this->designer = $designer;
//    }
//
//    public function startWork(): void
//    {
//        $this->developer->startDevelop();
//        $this->designer->startDesigned();
//    }
//
//    public function stopWork(): void
//    {
//        $this->developer->stopDevelop();
//        $this->designer->stopDesigned();
//    }
//
//}
//
//class Developer
//{
//    public function startDevelop(): void
//    {
//        echo 'start Develop <br>';
//    }
//
//    public function stopDevelop(): void
//    {
//        echo 'stop Develop <br>';
//    }
//}
//
//class Designer
//{
//    public function startDesigned(): void
//    {
//        echo 'start Design <br>';
//    }
//
//    public function stopDesigned(): void
//    {
//        echo 'stop Design <br>';
//    }
//
//}
//
//
//$developer = new Developer();
//$designer = new Designer();
//
//$workerFacade = new WorkerFacade($developer, $designer);
//
//$workerFacade->startWork();
//$workerFacade->stopWork();
