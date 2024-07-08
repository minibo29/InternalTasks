<?php

namespace App\SecondTask;

class Car
{
    /**
     * @var CarDetail[]
     */
    private $details;

    /**
     * @param CarDetail[] $details
     */
    public function __construct(array $details)
    {
        $this->details = $details;
    }

    public function isBroken(): bool
    {
        foreach ($this->details as $detail) {

            if ($detail->isBroken()) {
                return true;
            }
        }

        return false;
    }

    /**
     * I should clarify, if we have two broken details. For example: door and window.
     * In first case is painted damage in second case should be replaced.
     *
     * And if speak about Car as a domain, it is no only pained damage.
     */
    public function isPaintingDamaged(): bool
    {
        foreach ($this->details as $detail) {
            if (
                $detail->isBroken()
                && $detail instanceof PaintingDetailInterface
                && $detail->isPaintingDamaged()
            ) {
                return true;
            }
        }

        return false;
    }
}