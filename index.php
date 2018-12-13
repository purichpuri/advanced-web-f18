<?php
include('vendor/autoload.php');
//include ('autoloader.php')

include('includes/navigation.inc.php');

//generate products
use aitsyd\Product;

$product_class = new Product();
$products = $product_class -> getProducts();
$page_title = 'shop Page';

//generate categories
use aitsyd\Categories;
$category_class = new Categories();
$categories = $category_class -> getCategories();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    //'cache' => 'cache'
));

$template = $twig -> load('home.twig');

echo $template -> render(array(
    'pages' => $pages,
    'products' => $products,
    'pagetitle' => $page_title,
    'currentPage' => $currentPage,
    'categories' => $categories
    
    )
    );

?>
