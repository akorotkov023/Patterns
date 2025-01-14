<?php

// Компоновщик (composite) для ContainerInterface из PSR-11.

use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

final readonly class Container implements ContainerInterface
{

    /**
     * @param iterable<ContainerInterface> $containers
     */
    public function __construct(
        private iterable $containers
    ) {}

    public function get(string $id)
    {
        foreach ($this->containers as $container){
            try{
                return $container->get($id);
            } catch (NotFoundExceptionInterface){}
        }

        throw new class($id) extends RuntimeException implements NotFoundExceptionInterface {};
    }

    public function has(string $id): bool
    {
        foreach ($this->containers as $container){
            if ($container->has($id)){
                return true;
            }
        }
        return false;
    }
}
