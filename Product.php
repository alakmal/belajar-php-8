<?php

class Product
{

    public function __construct(


        public string $id,
        public string $name,
        public int $price,
        public int $quantity
    ) {}
}


$product = new Product(
    id: "11",
    name: "akmal",
    price: 300,
    quantity: 20
);

var_dump($product);