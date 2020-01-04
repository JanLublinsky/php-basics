<?php

class Fruit
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $weight;

    public function __construct(int $id, string $name, int $weight)
    {
        $this->id = $id;
        $this->name = $name;
        $this->weight = $weight;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'weight' => $this->weight
        ];
    }
}

$fruit = new Fruit($_GET['id'], $_GET['name'], $_GET['weight']);

header('Content-Type: application/json');

echo json_encode($fruit->toArray());