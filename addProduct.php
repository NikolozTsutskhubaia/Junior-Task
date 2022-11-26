<?php

include 'src/autoload.php';

$type = new Methods;
$type->setType()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script defer src="src/main.js"></script>
    <title>Add Product</title>
</head>

<body>
    <nav class="navbar" style="background-color: #fde8e3;">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Product List</span>
        </div>

    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Add Product
                            <a href="index.php"><button class="btn btn-outline-danger float-end">Cancel</button></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="addProduct.php" class="needs-validation" novalidate method="post" id="product_form">

                            <div class="mb-3">
                                <label for="SKU">SKU</label>
                                <input type="text" name="SKU" id="sku" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please, provide SKU
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please, provide Name
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="price">Price($)</label>
                                <input type="text" name="price" id="price" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please, provide Price
                                </div>
                            </div>

                            <select class="form-select mb-3" id="productType" aria-label="Default select example" required>
                                <option selected>Product Type</option>
                                <option value="DVD">DVD</option>
                                <option value="Book">Book</option>
                                <option value="Furniture">Furniture</option>
                            </select>

                            <div class="mb-3 d-none" id="DVD">
                                <label for="DVD">MB</label>
                                <input type="text" name="DVD" id="size" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please, provide DVD size
                                </div>
                                <div>
                                    Please provide DVD size
                                </div>
                            </div>

                            <div class="mb-3 d-none" id="Book">
                                <label for="Book">Weight</label>
                                <input type="text" name="Book" id="weight" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please, provide Weight
                                </div>
                                <div>
                                    Please provide Book's weight
                                </div>

                            </div>

                            <div class="mb-3 d-none" id="lengthDiv">
                                <label for="Furniture">Length</label>
                                <input type="text" name="Furniture1" id="length" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please, provide Length
                                </div>

                            </div>

                            <div class="mb-3 d-none" id="widthDiv">
                                <label for="Furniture">Width</label>
                                <input type="text" name="Furniture2" id="width" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please, provide Width
                                </div>

                            </div>

                            <div class="mb-3 d-none" id="heightDiv">
                                <label for="Furniture">Height</label>
                                <input type="text" name="Furniture3" id="height" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please, provide Height
                                </div>
                                <div>
                                    Please provide dimensions in LxWxH format
                                </div>

                            </div>


                            <div class="mb-3">
                                <button type="submit" name="type" id="submit" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>