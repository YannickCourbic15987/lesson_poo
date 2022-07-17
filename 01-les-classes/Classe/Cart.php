<?php


class Cart
{


    // on utilisera une fonction construstrice magique , pour lui attribuer des valeurs 
    //on passera par l'intémediaire de la fonction magique public __construct 

    public function __construct(
        private int $quantity, //=> attribut , '?' veut dire que tu peut être d'un tel type et être null aussi
        private float $totalPrice, // chiffre à virgule = float 

    ) {
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
    public function setQuantity(int $qte): void // pour dire que cela ne return , on met :void
    {
        $this->quantity = $qte;
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }
    public function setTotalPrice(float $price): void
    {
        $this->totalPrice = $price;
    }
    public function discount(float $remise): float
    {
        return $this->totalPrice = $this->totalPrice - ($this->totalPrice * ($remise / 100));
    }
}
