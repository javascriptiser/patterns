<?php
declare(strict_types=1);

namespace DesignPatterns\FlyWeight\Core;

class TreeTypeFactory
{
    /**
     * @var TreeType[]
     */
    public static array $treeTypes = [];

    public static function getTreeTypeCached(string $name, string $color, string $texture): TreeType
    {
        $newTreeType = new TreeType($name, $color, $texture);

        $key = array_search($newTreeType, self::$treeTypes);
        if ($key !== false) {
            return self::$treeTypes[$key];
        } else {
            self::$treeTypes[] = $newTreeType;
            return $newTreeType;
        }
    }

    public static function getTreeTypeNoCache(string $name, string $color, string $texture): TreeType
    {
        return new TreeType($name, $color, $texture);
    }

}