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
        $check = "SELECT * FROM ecommerce.products WHERE SKU = '$this->SKU'";
        $checkResult = $this->connect()->query($check);
        $checkRows = $checkResult->fetchColumn();
        if ($checkRows > 0) {
            echo '  <div class="alert alert-danger" role="alert">
                    A product with the specified SKU already exists
                    </div>';
        } else {
            $query = "INSERT INTO ecommerce.products (SKU, Name, Price, Type, Value) VALUES ('$this->SKU', '$this->name', '$this->price', '$this->type', '$this->value' );";

            $result = $this->connect()->query($query);
            if ($result) {
                header('Location:index.php');
            } else {
                echo '  <div class="alert alert-danger" role="alert">
                    A product with the specified SKU already exists
                    </div>';
            }
        }
    }
}
