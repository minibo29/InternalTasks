<?php

namespace App\SecondTask;

class Door extends CarDetail implements PaintingDetailInterface
{
    public bool $paintingDamaged = false;

    public function __construct(bool $isBroken)
    {
        parent::__construct($isBroken);
        if ($isBroken){
            $this->paintingDamaged = true;
        }
    }

    public function setPaintingDamaged(bool $paintingDamaged): static
    {
        $this->paintingDamaged = $paintingDamaged;
        return $this;
    }

    public function isPaintingDamaged(): bool
    {
        return $this->paintingDamaged;
    }
}