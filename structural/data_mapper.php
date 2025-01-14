<?php

//class Worker
//{
//    private string $name;
//
//    /**
//     * @param string $name
//     */
//    public function __construct(string $name)
//    {
//        $this->name = $name;
//    }
//
//    public static function make($args): Worker
//    {
//        return new self($args['name']);
//    }
//
//    public function getName(): string
//    {
//        return $this->name;
//    }
//
//}
//
//class WorkerMapper
//{
//    private WorkerStorageAdapter $workerStorageAdapter;
//
//    /**
//     * @param WorkerStorageAdapter $workerStorageAdapter
//     */
//    public function __construct(WorkerStorageAdapter $workerStorageAdapter)
//    {
//        $this->workerStorageAdapter = $workerStorageAdapter;
//    }
//
//    public function findById($id): string|Worker
//    {
//        $res =  $this->workerStorageAdapter->findId($id);
//        if ($res === null) {
//            return "No this id";
//        }
//        return $this->make($res);
//    }
//
//    private function make($args): Worker
//    {
//        return Worker::make($args);
//    }
//}
//
//class WorkerStorageAdapter
//{
//    private array $data = [];
//
//    /**
//     * @param array $data
//     */
//    public function __construct(array $data)
//    {
//        $this->data = $data;
//    }
//
//    public function findId($id)
//    {
//        if (isset($this->data[$id]))
//        {
//            return $this->data[$id];
//        }
//        return null;
//    }
//
//}
//
//$data = [
//    1 => [
//        'name' => 'Boris'
//    ]
//];
//$workerStorageAdapter = new WorkerStorageAdapter($data);
//
//$workerMapper = new WorkerMapper($workerStorageAdapter);
//
//$worker = $workerMapper->findById(1);
//
//var_export($worker->getName());
