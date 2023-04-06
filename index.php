<?php

interface EngineInterface
{
    public function start();
}

class GasolineEngine implements EngineInterface
{
    public function start()
    {
        echo 'Gasoline engine started.';
    }
}

class ElectricEngine implements EngineInterface
{
    public function start()
    {
        echo 'Electric engine started.';
    }
}

class Car
{
    private $engine;

    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    public function start()
    {
        $this->engine->start();
    }
}

// Creating a Car Object with Gasoline Engine.
$gasolineEngine = new GasolineEngine();
$car            = new Car($gasolineEngine);
$car->start(); // "Gasoline engine started."

// Replacing the implementation of the Engine class with ElectricEngine.
$electricEngine = new ElectricEngine();
$car            = new Car($electricEngine);
$car->start(); // "Electric engine started."
