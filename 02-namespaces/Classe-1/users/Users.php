<?php

namespace Classe_1\users;


class Users
{
    private int $id;
    public function __construct()
    {
        $this->id = rand();
    }
}
