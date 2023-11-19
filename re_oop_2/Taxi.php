<?php

require_once __DIR__ . '/Car.php';
class Taxi extends Car
{

    private $person;

    public function __construct($name, $number, $color)
    {
        parent::__construct($name, $number, $color);
    }

    public function pickUp($person)
    {
        // $this->person = $person;
        $this->person += $person;
        return "{$person}人が乗車しました\n";
    }
    public function lower($person)
    {
        if ($this->person - $person >= 0) {
            $this->person -= $person;
            return "{$person}人が降車しました\n";
        } else {
            return "{$person}人は降車できません\n";
        }
    }
    public function incar()
    {
        return $this->person;
    }
    public function information()
    {
        return "車の車種:{$this->name}\n車体番号:{$this->number}\nカラー:{$this->color}\n乗車人数:{$this->incar()}人\n\n";
    }
}
