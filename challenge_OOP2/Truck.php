<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private $energy;
    private $energyLevel;
    private $loadingMax;
    private $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $loadingMax)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->loadingMax = $loadingMax;
    }

    public function isFull()
    {
        if ($this->loading === $this->loadingMax) {
            return 'Full !';
        } else {
            return 'In filling !';

        }
    }

    public function forward() : string
    {
        $this->currentSpeed = 50;
        return "Cruising speed! ";
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

    public function setEnergy(string $energy)
    {
            $this->energy = $energy;

    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }

    public function setLoadingMax(int $loadingMax): void
    {
        if ($loadingMax >= 0){
            $this->loadingMax = $loadingMax;
        }
    }

    public function getLoadingMax(): string
    {
        return $this->loadingMax;
    }

    public function setLoading(int $loading): void
    {
        if ($loading >= 0){
            $this->loading = $loading;
        }
    }

    public function getLoading(): string
    {
        return $this->loading;
    }


}