<?php

class Methods extends Product
{

    //fetch data

    public function getProduct()
    {
        $query = "SELECT * FROM ecommerce.products ORDER BY LENGTH(SKU), SKU";
        $result = $this->connect()->query($query);
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch()) {
                $data[] = $row;
            }
            return $data;
        }
    }

    //delete data

    public function deleteProduct($deleteSKU)
    {
        foreach ($deleteSKU as $sku) {
            $query = "DELETE FROM ecommerce.products WHERE SKU = '$sku'";
            $result = $this->connect()->query($query);
            if ($result) {
                header('location:index.php');
            } else {
                echo 'error' . $query . '<br>' . $this->connect()->error;
            }
        }
    }

    //set data

    public function setType()
    {

        if (isset($_POST['type'])) {
            $type = $_POST['type'];
            $obj = new $type($_POST);
            $obj->setProduct();
        }
    }

    //display fetched data on index page

    public function displayProduct()
    {

        $data = $this->getProduct();

        if (isset($_POST['delete'])) {
            $deleteSKU = $_POST['delete'];
            $this->deleteProduct($deleteSKU);
        }

        if (isset($data)) {
            foreach ($data as $product) {

                $field = $product['Type']::$field;
                $unit = $product['Type']::$unit;

                echo "<div class='card border-dark m-3 d-inline-block' style='width: 18rem;'>
                        <div class='card-header' id='SKU'> " .
                    $product['SKU']  . "
                            <div class='float-end'>
                            <input class='delete-checkbox' name='delete[]' type='checkbox' value='" . $product['SKU'] . "' id='flexCheckDefault'>
                            </div>
                        </div>
                        <div class='card-body text-dark'>
                            <p class='card-text'>" .  $product['Name']  . "</p>
                            <p class='card-text'>Price: " .  $product['Price']  . " $</p>
                            <p class='card-text'>" . $field . ' : ' .  $product['Value'] . $unit  . "</p>

                        </div>
                    </div>";
            }
        }
    }
}
