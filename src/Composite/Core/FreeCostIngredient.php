<?php
declare(strict_types=1);

namespace DesignPatterns\Composite\Core;

class FreeCostIngredient extends Component
{
 public function __construct()
 {
     parent::__construct(0);
 }
}