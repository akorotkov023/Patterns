<?php

class WorkerList
{
    private array $list = [];
    private int $index = 0;

    public function getList(): array
    {
        return $this->list;
    }

    public function setList(array $list): void
    {
        $this->list = $list;
    }

    public function getItem($key): ?Worker
    {
        if ($this->list[$key]){
            return $key;
        }
        return null;
    }

    public function next(): void
    {
        if ($this->index < count($this->list) - 1){
            $this->index++;
        }

    }

    public function prev(): void
    {
        if ($this->index){
            $this->index--;
        }
    }

    public function getByIndex(): Worker
    {
        return $this->list[$this->index];
    }
}

class Worker
{
    private string $name = '';

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }

}

$worker1 = new Worker('Boris');
$worker2 = new Worker('Alex');
$worker3 = new Worker('Sonya');

$workerList = new WorkerList();
$workerList->setList([$worker1, $worker2, $worker3]);
$workerList->next();

var_export($workerList->getByIndex()->getName());
