<?php

//interface AbstractFactory
//{
//    public static function makeDeveloperWorker(): DeveloperWorker;
//    public static function makeDesignerWorker(): DesignerWorker;
//
//}
//
//class OutsourceWorkerFactory implements AbstractFactory
//{
//
//    public static function makeDesignerWorker(): DesignerWorker
//    {
//        return new OutsouceDesignerWorker();
//    }
//
//    public static function makeDeveloperWorker(): DeveloperWorker
//    {
//        return new OutsourceDeveloperWorker();
//    }
//}
//
//class NativeWorkerFactory implements AbstractFactory
//{
//
//    public static function makeDesignerWorker(): DesignerWorker
//    {
//        return new NativeDesignerWorker();
//    }
//
//    public static function makeDeveloperWorker(): DeveloperWorker
//    {
//        return new NativeDeveloperWorker();
//    }
//}
//
//interface Worker
//{
//    public function work();
//
//}
//
//interface DeveloperWorker extends Worker{}
//interface DesignerWorker extends Worker{}
//
//class NativeDesignerWorker implements DesignerWorker
//{
//    public function work(): void
//    {
//        echo "im designer as native";
//    }
//}
//
//class NativeDeveloperWorker implements DeveloperWorker
//{
//    public function work(): void
//    {
//        echo "im developer as native";
//    }
//}
//
//class OutsouceDesignerWorker implements DesignerWorker
//{
//    public function work(): void
//    {
//        echo "im designer as outsource";
//    }
//}
//
//class OutsourceDeveloperWorker implements DeveloperWorker
//{
//    public function work(): void
//    {
//        echo "im developer as outsource";
//    }
//}
//
//
//$nativeDeveloper = NativeWorkerFactory::makeDeveloperWorker();
//$nativeDesigner = NativeWorkerFactory::makeDesignerWorker();
//$outsorceDesigner = OutsourceWorkerFactory::makeDesignerWorker();
//$outsourceDeveloper = OutsourceWorkerFactory::makeDeveloperWorker();
//$nativeDeveloper->work();

