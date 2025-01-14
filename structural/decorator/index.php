<?php

namespace App;

use Iterator;
use ReturnTypeWillChange;

require_once 'vendor/autoload.php';

class NumberIterator implements Iterator {
    private array $numbers = [];
    private int $position = 0;

    public function __construct(array $numbers) {
        $this->numbers = $numbers;
    }

    #[ReturnTypeWillChange]
    public function current()
    {
        return $this->numbers[$this->position];
    }

    #[ReturnTypeWillChange]
    public function key()
    {
        return $this->position;
    }

    #[ReturnTypeWillChange]
    public function next()
    {
        ++$this->position;
    }

    #[ReturnTypeWillChange]
    public function rewind()
    {
        $this->position = 0;
    }

    #[ReturnTypeWillChange]
    public function valid()
    {
        return isset($this->numbers[$this->position]);
    }
}

// Использование итератора
$numbers = [1, 2, 3, 4, 5];
$iterator = new NumberIterator($numbers);

foreach ($iterator as $key => $value) {
    echo "Key: $key, Value: $value\n";
}

