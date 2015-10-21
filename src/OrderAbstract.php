<?php

namespace src;

abstract class OrderAbstract
{
    protected function calculateDeliveryPrice()
    {
        return $this->getPrice() / 20;
    }
}