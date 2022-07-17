<?php

namespace App;

class Users
{
    public function __construct(
        private string $username
    ) {
    }

    public function getUsernane(): string
    {
        return $this->username;
    }

    public function setUsername(string $pseudo): void
    {
        $this->username = $pseudo;
    }
}
