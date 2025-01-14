<?php

abstract class Handler
{
    private ?Handler $successor;

    /**
     * @param Handler|null $successor
     */
    public function __construct(?Handler $successor)
    {
        $this->successor = $successor;
    }
}

//TODO доделать паттерн
