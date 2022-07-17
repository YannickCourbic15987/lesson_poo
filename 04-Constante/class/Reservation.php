<?php

namespace Classe;


class Reservation
{
    private const APPROVAL_PENDING = 'en attente';
    public const APPROVAL_APPROVED = 'approuvée';
    public const APPROVAL_REJECTED = 'rejetée';


    public function __construct()
    {
        $this->status = self::APPROVAL_PENDING;
    }
}
