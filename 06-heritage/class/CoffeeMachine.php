<?php

namespace Classe;



class CoffeeMachine
{
    public int $cups = 1;

    public function select(string $select)
    {
        $result = match ($select) {
            'expresso' => $this->makeExpresso(),
            default => 'error'
        };

        return $result;
    }

    public function makeExpresso()
    {
        for ($i = 0; $i < $this->cups; $i++) {
            echo 'café expresso n° ' . $i + 1  . ' est servi !';
        }
    }
}
