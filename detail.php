<?php
include('autoloader.php');

$product_class = new ProductDetail();
$products = $product_class -> getProducts();

?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script src="node_modules/pooper.js/dist/umd/popper.js"></script>
    </head>
    
    <!-- how to comment for html -->
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1><?php echo $product[0]['name'] ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-6">
                    <?php ?>
                </div>
            </div>
        </div>
    </body>
</html>