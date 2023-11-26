<?php
interface BirdFly
{
    public function fly();
}

interface BirdEat
{
    public function eat();
}
class Swallow implements BirdFly,BirdEat
{
    public function eat() { }
    public function fly() { }
}

class Ostrich implements BirdEat
{
    public function eat() { }

}