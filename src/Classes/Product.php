<?php

abstract class Product extends DBconnect
{
    public $SKU;
    public $name;
    public $price;
    public $type;
    public $value;

    public function setProduct()
    {
        $query = "INSERT INTO ecommerce.products (SKU, Name, Price, Type, Value) VALUES ('$this->SKU', '$this->name', '$this->price', '$this->type', '$this->value' );";

        $result = $this->connect()->query($query);
        if ($result) {
            header('Location:index.php');
        } else {
            echo 'error' . $query . '<br>' . $this->connect()->error;
        }
    }
}
