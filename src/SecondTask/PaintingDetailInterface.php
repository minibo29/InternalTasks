<?php

namespace App\SecondTask;

interface PaintingDetailInterface
{
    public function isPaintingDamaged(): bool;

    public function setPaintingDamaged(bool $paintingDamaged);
}