<?php


namespace src;


class Order extends OrderAbstract
{
    private $id;
    private $name;
    private $price;

    private $products = [];

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function addProduct(Product $product)
    {
        if ($product instanceof Delivery) {
            $product->setPrice($this->calculateDeliveryPrice());
        }

        $this->products[] = $product;
        $this->setPrice($this->getPrice() + $product->getPrice());
    }

    public function getProducts()
    {
        return $this->products;
    }
}