<?php

include 'src/autoload.php';

$obj = new Methods;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scandiweb Junior Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <form action="index.php" method="post">
        <nav class="navbar" style="background-color: #fde8e3;">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Product List</span>
                <div>

                    <a href="addProduct.php">
                        <button type="button" class="btn btn-outline-success">ADD</button>
                    </a>
                    <button type="submit" value="delete" name="but_delete" class="btn btn-outline-danger" id="delete-product-btn">MASS DELETE</button>

                </div>
            </div>

        </nav>

        <div class="container m-3 w-100">
            <?php
            $obj->displayProduct();
            ?>
        </div>
    </form>
</body>

</html>