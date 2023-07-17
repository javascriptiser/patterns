<?php
declare(strict_types=1);

namespace DesignPatterns\FlyWeight;

use DesignPatterns\FlyWeight\Core\Tree;
use DesignPatterns\FlyWeight\Core\TreeTypeFactory;

class App
{
    /**
     * @var Tree[]
     */
    public array $trees;

    public function createTreeWithFlyWeight(string $name, string $color, string $texture, int $x, int $y)
    {
        $treeType = TreeTypeFactory::getTreeTypeCached($name, $color, $texture);
        $this->trees[] = new Tree($x, $y, $treeType);
    }

    public function createTreeNoFlyWeight(string $name, string $color, string $texture, int $x, int $y)
    {
        $treeType = TreeTypeFactory::getTreeTypeNoCache($name, $color, $texture);
        $this->trees[] = new Tree($x, $y, $treeType);
    }
}