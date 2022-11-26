<?php

class Methods extends DBconnect
{
    //fetch data

    public function getProduct()
    {
        $query = "SELECT * FROM ecommerce.products";
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
            switch ($_POST['type']) {
                case 'DVD':
                    $obj = new DVD($_POST);

                    break;
                case 'Book':
                    $obj = new Book($_POST);

                    break;

                case 'Furniture':
                    $obj = new Furniture($_POST);

                    break;

                default:

                    break;
            }

            $obj->setProduct();
        }
    }

    //display fetched data on index page

    public function displayProduct()
    {
        $obj = new Methods($_POST);

        $data = $obj->getProduct();

        if (isset($_POST['delete'])) {
            $deleteSKU = $_POST['delete'];
            $obj->deleteProduct($deleteSKU);
        }

        if (isset($data)) {
            foreach ($data as $product) {
                switch ($product['Type']) {
                    case 'DVD':
                        $type = 'Size';
                        $unit = 'MB';
                        break;
                    case 'Book':
                        $type = 'Weight';
                        $unit = 'KG';
                        break;
                    case 'Furniture':
                        $type = 'Dimensions';
                        $unit = '';
                        break;
                    default:
                        $unit = '';
                        break;
                }

                ($product['Type']);

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
                            <p class='card-text'>" . $type . ' : ' .  $product['Value'] . $unit  . "</p>

                        </div>
                    </div>";
            }
        }
    }
}
