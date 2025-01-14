<?php

/*
 * Написать декоратор используя EventDispatcherInterface и PSR-3
 */
//namespace App;
//
//use Psr\EventDispatcher\EventDispatcherInterface;
//use Psr\Log\LoggerInterface;
//
//require_once 'vendor/autoload.php';
//
//final readonly class LoggingDispatcher implements EventDispatcherInterface
//{
//    public function __construct(
//        private EventDispatcherInterface $dispatcher,
//        private LoggerInterface $logger
//    ){}
//
//    public function dispatch(object $event): object
//    {
//        $this->logger->debug('About to dispatch event {event_class}.',[
//            'event_class' => $event::class,
//            'event' => $event
//        ]);
//
//        try{
//            $modifiedEvent = $this->dispatcher->dispatch($event);
//        } catch (\Throwable $exception){
//            $this->logger->critical('About to dispatch event {event_class}.',[
//                'event_class' => $event::class,
//                'event' => $event,
//                'exception' => $exception
//            ]);
//
//            throw $exception;
//        }
//
//        $this->logger->info('About to dispatch event {event_class}.',[
//            'event_class' => $event::class,
//            'event' => $event,
//            'modified_event' => $modifiedEvent
//        ]);
//
//        return $modifiedEvent;
//    }
//}

