<?php

namespace Classe;

abstract class Vehicule
{


    public function __construct(
        protected string $marque,

    ) {
    }
    public function rouler(): string
    {
        return 'je roule';
    }

    public function marque(): string
    {
        return 'je roule en ' . $this->marque . '.';
    }
}
