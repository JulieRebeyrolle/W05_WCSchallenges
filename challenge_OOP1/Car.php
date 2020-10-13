<?php
class Car
{
    private $numberOfWheels = 4;
    private $currentSpeed;
    private $color;
    private $numberOfSeats;
    private $energyType;
    private $energyLevel = 100;

    public function __construct(string $color, int $numberOfSeats, string $energyType)
    {
        $this->color = $color;
        $this->numberOfSeats = $numberOfSeats;
        $this->energyType = $energyType;
    }


    public function forward() : string
    {
        $this->currentSpeed = 50;
        return "Cruising speed! ";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed = $this->currentSpeed - 5;
            $sentence .= "Brake!!! ";
        }
        $sentence .= "I'm stopped! ";
        return $sentence;
    }

    public function start(): string
    {
        $sentence = "";
        while ($this->currentSpeed <50) {
            $this->currentSpeed = $this->currentSpeed + 10;
            $sentence .= "Go! ";
        }
        $sentence .= "Okay ! ";
        return $sentence;
    }


    public function getNumberOfWheels() : int
    {
        return $this->numberOfWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNumberOfSeats() : int
    {
        return $this->numberOfSeats;
    }

    public function getEnergyType(): string
    {
        return $this->energyType;
    }

    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }

}
