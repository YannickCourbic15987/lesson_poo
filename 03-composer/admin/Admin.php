<?php

namespace App;


class Admin
{
    public function __construct(
        private int $number
    ) {
    }

    /**
     * Get the value of number
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * Set the value of number
     */
    public function setNumber(int $nbr): void
    {
        $this->number = $nbr;
    }
}
