<?php

namespace Classe;

class OfficeReservation
{

    public static int $count = 0;
    public function __construct(
        public string $information,
    ) {
        self::$count++;
    }
}
