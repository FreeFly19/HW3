<?php

namespace src;

abstract class OrderAbstract
{
    /**
     * @return number
     */
    abstract protected function getPrice();
    
    /**
     * @return number
     */
    protected function calculateDeliveryPrice()
    {
        return $this->getPrice() / 20;
    }
}
