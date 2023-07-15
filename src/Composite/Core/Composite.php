<?php
declare(strict_types=1);

namespace DesignPatterns\Composite\Core;

class Composite extends Component
{
    /**
     * @var Component[]
     */
    public array $components = [];

    public function __construct()
    {
        parent::__construct(0);
    }

    public function add(Component $component): void
    {
        $this->components[] = $component;
    }

    public function getPrice(): float
    {
        foreach ($this->components as $component) {
            $this->price += $component->getPrice();
        }
        return $this->price;
    }
}