<?php

class Dog
{
    private $name;
    private $sex;
    private $mother;
    private $father;

    public function __construct(string $name, string $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getSex():string
    {
        return $this->sex;
    }

    public function setFather($father):void
    {
        $this->father = $father;
    }

    public function setMother($mother):void
    {
        $this->mother = $mother;
    }

    public function fathersName(): string
    {
        return $this->father == null ? 'Unknown' : $this->father;
    }

    public function mothersName(): string
    {
        return $this->mother == null ? 'Unknown' : $this->mother;
    }

    public function HasSameMotherAs($mother): bool
    {
        return $mother == $this->mother;
    }

}

class DogTest
{
    public static function main()
    {
        $max = new Dog("Max", "male");
        $rocky = new Dog("Rocky", "male");
        $sparky = new Dog("Sparky", "male");
        $buster = new Dog("Buster", "male");
        $sam = new Dog("Sam", "male");
        $lady = new Dog("Lady", "female");
        $molly = new Dog("Molly", "female");
        $coco = new Dog("Coco", "female");

        $max->setMother($lady->getName());
        $max->setFather($rocky->getName());
        $coco->setMother($molly->getName());
        $coco->setFather($buster->getName());
        $rocky->setMother($molly->getName());
        $rocky->setFather($sam->getName());
        $buster->setMother($lady->getName());
        $buster->setFather($sparky->getName());

        echo $coco->fathersName() . PHP_EOL;
        echo $sparky->fathersName() . PHP_EOL;

        echo $coco->HasSameMotherAs($rocky->mothersName()) . PHP_EOL;

    }
}

DogTest::main();