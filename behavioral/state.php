<?php

//interface State
//{
//    public function toNext(Task $task);
//    public function getStatus(): string;
//
//}
//
//class Task
//{
//    private State $state;
//
//    public function getState(): State
//    {
//        return $this->state;
//    }
//
//    public function setState(State $state): void
//    {
//        $this->state = $state;
//    }
//
//    public function proceedToNext(): void
//    {
//        $this->state->toNext($this);
//    }
//    public static function make(): Task
//    {
//        $self = new self();
//        $self->setState(new Created());
//        return $self;
//    }
//
//}
//class Created implements State
//{
//    public function toNext(Task $task)
//    {
//       $task->setState(new Process());
//    }
//
//    public function getStatus(): string
//    {
//        return "created";
//    }
//}
//
//class Process implements State
//{
//    public function toNext(Task $task): void
//    {
//        $task->setState(new Finish());
//    }
//
//    public function getStatus(): string
//    {
//        return "process";
//    }
//}
//
//class Finish implements State
//{
//    public function toNext(Task $task){}
//
//    public function getStatus(): string
//    {
//        return "finished";
//    }
//}
//
//$task = Task::make();
//$task->proceedToNext();
//$task->proceedToNext();
//var_export($task->getState()->getStatus());
