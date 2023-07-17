<?php
declare(strict_types=1);

namespace DesignPatterns\FlyWeight\Core;


class Tree
{
    private int $x;
    private int $y;
    private TreeType $treeType;

    public function __construct(int $x, int $y, TreeType $treeType)
    {
        $this->x = $x;
        $this->y = $y;
        $this->treeType = $treeType;
    }
}