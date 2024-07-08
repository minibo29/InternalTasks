<?php

namespace App\SecondTask;

abstract class CarDetail {

    public function __construct(
        protected bool $isBroken
    ) {
    }

    public function isBroken(): bool
    {
        return $this->isBroken;
    }
}